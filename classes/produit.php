<?php
    class Produit{
        protected $id;
        protected $libelle;
        protected $prix;
        protected $qte;
        protected $des;
        protected $image;
        protected $promo;

        function __construct($id, $libelle, $prix, $qte, $des, $image, $promo){
            $this->id = $id;
            $this->libelle = $libelle;
            $this->prix = $prix;
            $this->qte = $qte;
            $this->des = $des;
            $this->image = $image;
            $this->promo = $promo;
        }
        

        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of libelle
         */
        public function getLibelle()
        {
                return $this->libelle;
        }

        /**
         * Get the value of prix
         */
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Get the value of qte
         */
        public function getQte()
        {
                return $this->qte;
        }

        /**
         * Get the value of des
         */
        public function getDes()
        {
                return $this->des;
        }

        /**
         * Get the value of image
         */
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Get the value of promo
         */
        public function getPromo()
        {
                return $this->promo;
        }
    }
?>