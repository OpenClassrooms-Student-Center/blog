<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 24/09/17
 * Time: 19:38
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;

require_once '../templates/PublicList.php';

class ArticleDetailsController extends AbstractController
{

    private $billet;

    public function __construct()
    {
        $this->billet = new BilletManager();
    }

    // Affiche les détails sur le billet
    public function billet($idBillet)
    {
        $billet = $this->billet->getBillets($idBillet);
    }

}