<?php

    class Categoria {

        public function __construct(string $_nome, string $_iconUrl) {
            $this->setNome($_nome);
            $this->setIconUrl($_iconUrl);
        }

        /**
         * Get the value of nome
         */
        public function getNome(): string {
            return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self {
            $this->nome = $nome;
            return $this;
        }

        /**
         * Get the value of picUrl
         */
        public function getIconUrl(): string {
            return $this->iconUrl;
        }

        /**
         * Set the value of picUrl
         */
        public function seticonUrl(string $iconUrl): self {
            $this->iconUrl = $iconUrl;
            return $this;
        }

        private string $nome = "";
        private string $iconUrl = "";

    }

?>