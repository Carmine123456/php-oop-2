
<?php

class Product {

    public $image;
    public $name;
    public $price;
    public $icon;
    public $type;

    public function __construct( $_image,$_name, $_price, $_icon, Type $_type)
    {
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
        $this->icon = $_icon;
        $this->type = $_type;
    }

    public function getDetails(){
        return "
                <div class='card' style='width: 18rem;'>
                    <img src='".$this->image."' class='card-img-top'>
                    <div class='card-body'>
                        <h1>".$this->name."</h1>
                        <p class='card-text'>Prezzo: ".$this->price."</p>
                        <div class='card-text'>".$this->icon."</div>
                        <p class='card-text'>Categoria: ".$this->type->type."</p>
                    </div>
                </div>";
    }
    
}