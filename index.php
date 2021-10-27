<!-- 
    è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza (attributi, o proprietà)
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 -->

<?php 

 class Movie {

    public $id;
    public $titolo;
    public $descrizione;
    public $genere;
    public $data;
    public $voto;


  
    function __construct ($titolo, $descrizione, $genere, $data, $voto){
        $this->titolo = $titolo;
        $this->descrizione = $descrizione;
        $this->genere = $genere;
        $this->data = $data;
        $this->voto = $voto;
    }


    public function getTitolo () {
        return $this->titolo;
    }

    public function getDescrizione (){
        return $this->descrizione;
    }

    public function getGenere (){
        return $this->genere;
    }

    public function getData (){
        return $this->data;
    }

    public function getVoto (){
        return $this->voto;
    }

 }

 $movies= [
        new Movie("Titanic", "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, perferendis veniam! Atque nisi a
        minima aliquam nostrum praesentium natus quaerat ratione fugit qui! Dicta sunt nisi doloribus architecto fuga est.", 
        "drammatico", "15-05-1999", 8),
        new Movie("300", "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, perferendis veniam! Atque nisi a 
        minima aliquam nostrum praesentium natus quaerat ratione fugit qui! Dicta sunt nisi doloribus architecto fuga est.", 
        "storico", "25-09-2009", 10),
 ];




; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php foreach ($movies as $movie) { ; ?>
        <div class="movie">

            <h1> 
               <?= $movie->getTitolo()  ; ?>
            </h1>

            <p> <strong>Descrizione : </strong> <?= $movie->getDescrizione()  ; ?></p>

            <p> <strong>Genere : </strong> <?= $movie->getGenere()  ; ?></p>

            <p><strong>Data di uscita : </strong><?= $movie->getData()  ; ?></p>

            <p> <strong>Voto : </strong> <?= $movie->getVoto()  ; ?></p>

        </div>
    <?php }; ?>

</body>
</html>

