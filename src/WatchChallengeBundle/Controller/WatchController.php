<?php

namespace WatchChallengeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WatchChallengeBundle\Entity\Watch;
use Symfony\Component\HttpFoundation\JsonResponse;

class WatchController extends Controller
{
    public function getBySlugAction($brand, $model, $sku)
    {
        /** @var \WatchChallengeBundle\Repository\WatchRepository $repo */
        $watchRepository = $this->getDoctrine()->getRepository('WatchChallengeBundle:Watch');
//        $entity = $watchRepository->_NativeSQLgetByBrandModelSKU($brand, $model, $sku);
        $entity = $watchRepository->_NativeSQLgetByBrandModelSKU($brand, $model, $sku);
        return new JsonResponse(array('items' => $entity->toJson()));
    }
}
