<?php

namespace App\Mail;

use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NouveauProduitAjouter extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $commande;
    public function __construct(Commande $commande)
    {
        //
        $this->commande=$commande;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.produits.nouveau-produit-ajouter',['commande'=>$this->commande]);
    }
}
