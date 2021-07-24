<?php
    class Laravel {
        public $name;
        public $semanticVersion;

        public function __construct($name, $semanticVersion = 0)
        {
            // Class to Obj, This Method Will Run Once Automatically
            echo "\n This is Constructor. My Version is ";
            $this->name = $name;
            $this->semanticVersion = $semanticVersion;
        }

        public function info()
        {
            $this->version();
        }
        public function version()
        {
            if ($this->semanticVersion == 0) {
                echo $this->name , $this->semanticVersion ;
            } else {
                echo "$this->name This is Supporting now $this->name , $this->semanticVersion ";
            }
        }

    }

//    $frameWork = new Laravel();
//    $frameWork->name = "8.0 \n";
//    $frameWork->version();

    $frameWork = new Laravel("8.0.", "12.69");
    $frameWork->info();
//    $newFramework = new Laravel("12.0");
//    $newFramework->info();