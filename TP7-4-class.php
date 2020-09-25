<?php 


class Form {

    protected $codeInit ;
    protected $codeText ;
    protected $codeBtn ;
    protected $code ;

    protected $closeForm ;


//<form> & <fieldset> pour l'en tete du formulaire ainsi que sa cloture 
    public function __construct($action ,$methode="POST",$legende)
    {
        $this->codeInit = '<form action="'.$action.'" methode="'.$methode.'">';
        $this->codeInit .= '<fieldset><legende><b>'.$legende.'</b></legende></br></br>';

        $this->closeForm = '</fieldset></form>';

    }



// settext()  HTML ajoute une zone de texte
    public function setText ($name,$libelle){

        $this->codeText .= '<input type="text" name="'.$name.'" placeholder="'.$libelle.'"/></br></br>' ;

    }


// setsubmit() HTML ajoute un bouton d’envoi
    public function setSubmit ($name,$value){

        $this->codeBtn = '<input type="submit" name="'.$name.'" value="'.$value.'" /></br></br>' ;

    }




// getForm ()  retourne TOUT le code HTML de création du formulaire
    public function getForm(){

        $this->code.= $this->codeInit ;
        $this->code.= $this->codeText ;
        $this->code.= $this->codeBtn ;

        $this->code.= $this->closeForm ;

        return $this->code ;

    }

}




?>