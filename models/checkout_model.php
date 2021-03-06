<?php
class Checkout_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * functia face un delete in tabela "produse_comanda" pentru utilizatorul logat , in cazul in care acesta renunta la o comanda in loc sa o plaseze
     * id_ul utilizatorului fiind preluat din sesiune
     */
    public function deleteCommand($id_command){
        if (!isset($_SESSION))
        {
            session_start();
        }
        $id = Session::get('id_utilizator');
        return $this->db->delete2('produse_comanda', 'id_utilizator', $id, 'id_comanda', $id_command);
    }


    /**
     * pentru o comanda specificata ,al carei id este preluat din paramentru , functia returneaza toate datele 
     * despre produsele care sunt incluse in comanda
     */
    public function selectCartProducts($orderId){
        return $this->db->selectJoinLimit('produse_comanda', 'produse', 'id_produs', 'id_produs', 'id_comanda', $orderId);
    }


    /**
     * pentru o comanda specificata , al carui id a fost preluat din parametru se calculeaza subtotalul , inmultindu-se cantitatea din fiecare produs
     * cu pretul aferent fiecaruia si adunandu-se la un subtotal , care ulterior este returnat 
     */
    public function selectSubtotal($orderId){
        $result = $this->db->select1('produse_comanda', 'id_comanda', $orderId);
        $subtotal = 0;
        while($row = $result->fetch()){
            $subtotal = $subtotal + $row['pret']*$row['cantitate'];
        }
        return $subtotal;
    }


    /**
     * functia returneaza numarul de produse incluse intr-o comanda specificata  , al carui id este preluat din parametrii functiei
     */
    public function selectNrProd($orderId){
        $result = $this->db->selectCount('produse_comanda', 'id_comanda', $orderId);
        $row = $result -> fetch();
        return $row['count(*)'];
    }

    /**
     * functia face un insert in tabela comanda , insereaza datele de contact ,de livrare si de plata ale unui utilizator care a plasat o comanda
     * in cazul in care se alege cash ca mod plata se insereaza plata ca fiind inregistrata , altfel ca fiind in steptare(deoarece urmeaza alta pagina 
     * pentru completarea de payment)
     * Odata plasata comanda , pentru fiecare produs din comanda se realizeaza un update asupra stock-ului fiecarui produs,scazand din cantitate
     */
    public function addNewCommand($id_comanda, $nume, $prenume, $email, $adresa, $oras, $tara, $plata, $livrare){
        if (!isset($_SESSION))
        {
            session_start();
        }
        $id = Session::get('id_utilizator');
        if($plata == "cash")
        {
            $status_comanda = "inregistrata";
        }
        else if($plata == "card")
        {
            $status_comanda = "in asteptare plata";
        }

        $result = $this->db->selectDate();
        $row = $result->fetch();
        $data_plasare = $row['sysdate()'];

        $insert_data = array(
            'id_utilizator' => $id, 'nume' => $nume, 'prenume' => $prenume, 'email' => $email,
            'adresa' => $adresa, 'oras' => $oras, 'tara' => $tara, 'metoda_plata' => $plata, 'metoda_livrare' => $livrare,
            'status_comanda' => $status_comanda, 'data_plasare' => $data_plasare, 'id_comanda' => $id_comanda
        );
        $this->db->insert('comanda', $insert_data);

        $result1 = $this->db->select1('produse_comanda', 'id_comanda', $id_comanda);
        while($row1 = $result1->fetch()){
            $this->db->updateSetNew('marimi', 'cantitate', $row1['cantitate'], 'id_produs', $row1['id_produs'], 'marime', $row1['marime']);
        }
    }
    /**
     * functia face un delete in baza de date , ea sterge intregul cos cu produse pentru un utilizator logat , al carui id este preluat din sesiune
     */
    public function deleteCart(){
        if (!isset($_SESSION))
        {
            session_start();
        }
        $id = Session::get('id_utilizator');

        return $this->db->delete1('cos', 'id_utilizator', $id);
    }
}
