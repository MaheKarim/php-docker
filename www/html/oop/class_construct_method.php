<?php
    class Laravel {
        public $name;
        public $semanticVersion;

        public function __construct($name, $semanticVersion)
        {
            // Class to Obj, This Method Will Run Once Automatically
            echo "This is Constructor. My Version is ";
            $this->name = $name;
            $this->semanticVersion = $semanticVersion;
        }
        
        public function version()
        {
            echo $this->name ;
            echo $this->semanticVersion ;
        }

    }

//    $frameWork = new Laravel();
//    $frameWork->name = "8.0 \n";
//    $frameWork->version();

    $frameWork = new Laravel("8.0.", "12.69");
    $frameWork->version();