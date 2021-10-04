<?php

if (!function_exists('img_url'))
{
    /**
     * défini le chemin de l'image
     * @param string $nom nom de l'image
     * @return string le chemin de l'image
     */
    function img_url($nom)
    {
        return base_url() . '/public/assets/images/' . $nom;
    }
}