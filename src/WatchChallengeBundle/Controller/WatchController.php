<?php

namespace WatchChallengeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WatchChallengeBundle\Entity\Watch;
use WatchChallengeBundle\Entity\WatchImage;
use Symfony\Component\HttpFoundation\JsonResponse;

class WatchController extends Controller
{
    public function getBySlugAction($brand, $model, $sku)
    {
        /** @var \WatchChallengeBundle\Repository\WatchRepository $watchRepository */
        $watchRepository = $this->getDoctrine()->getRepository('WatchChallengeBundle:Watch');
//        $entity = $watchRepository->_NativeSQLgetByBrandModelSKU($brand, $model, $sku);
        $entity = $watchRepository->_NativeSQLgetByBrandModelSKU($brand, $model, $sku);
        return new JsonResponse(array('items' => $entity->toJson()));
    }

    public function createAction(Request $request)
    {
        $data = $request->request->all();
        $watch = new Watch();

        if (array_key_exists('brand_id', $data) && $data['brand_id']) {
            /** @var \WatchChallengeBundle\Repository\BrandRepository $brandRepo */
            $brandRepo = $this->getDoctrine()->getRepository('WatchChallengeBundle:Brand');
            $brand = $brandRepo->findOneBy(array('id' => $data['brand_id']));
            $watch->setBrand($brand);
        }

        if (array_key_exists('case_material_id', $data) && $data['case_material_id']) {
            /** @var \WatchChallengeBundle\Repository\BrandRepository $caseMaterialRepo */
            $caseMaterialRepo = $this->getDoctrine()->getRepository('WatchChallengeBundle:CaseMaterial');
            $caseMaterial = $caseMaterialRepo->findOneBy(array('id' => $data['case_material_id']));
            $watch->setCaseMaterial($caseMaterial);
        }

        if (array_key_exists('condition_id', $data) && $data['condition_id']) {
            /** @var \WatchChallengeBundle\Repository\WatchConditionRepository $watchConditionRepo */
            $watchConditionRepo = $this->getDoctrine()->getRepository('WatchChallengeBundle:WatchCondition');
            $watchCondition = $watchConditionRepo->findOneBy(array('id' => $data['condition_id']));
            $watch->setCondition($watchCondition);
        }

        if (array_key_exists('watch_functions', $data) && $data['watch_functions'] && is_array($data['watch_functions'])) {
            /** @var \WatchChallengeBundle\Repository\WatchFunctionRepository $watchFunctionRepo */
            $watchFunctionRepo = $this->getDoctrine()->getRepository('WatchChallengeBundle:WatchFunction');
            foreach($data['watch_functions'] as $functionId){
                $function = $watchFunctionRepo->findOneBy(array('id' => $functionId));
                if(!empty($function)){
                    $watchFunctions[] = $function;
                }
            }
            $watch->setWatchFunctions($watchFunctions);
        }

        $watch->setModel($data['model']);
        $watch->setCaseSite($data['case_site']);
        $watch->setSku($data['sku']);
        $watch->setBracelet($data['bracelet']);
        $watch->setSlug($data['model'] . '-' .$data['sku']);

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($watch);
        $em->flush();

        foreach($request->files as $file){
            if(null === $file && in_array($file->getClientMimeType(), array('image/jpeg'))){
                continue;
            }
            $image = new WatchImage();
            $uniqid = uniqid('', true);
            $watch->addWatchImages($image);
            $image->setPath($image::BaseUrl . $uniqid . $file->getClientOriginalName());

            $file->move($image::BaseUrl, $uniqid . $file->getClientOriginalName());
            $em->persist($image);
            $em->persist($watch);
            $em->flush();
        }


        return new JsonResponse(array(
            'watch' => $watch->toJson()
        ));
    }

    public function deleteAction($sku)
    {
        /** @var \WatchChallengeBundle\Repository\WatchRepository $watchRepository */
        $watchRepository = $this->getDoctrine()->getRepository('WatchChallengeBundle:Watch');
        $item = $watchRepository->findBy(array('sku' => $sku));
        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($item);
        $em->flush();
        return new JsonResponse(array(
            'request' => 'OK'
        ));
    }

    public function updateAction(Request $request)
    {
        $data = $request->request->all();

        /** @var \WatchChallengeBundle\Repository\WatchRepository $watchRepository */
        $watchRepository = $this->getDoctrine()->getRepository('WatchChallengeBundle:Watch');
        $watch = $watchRepository->findOneBy(array('id' => $data['watch_id']));


        if (array_key_exists('brand_id', $data) && $data['brand_id']) {
            /** @var \WatchChallengeBundle\Repository\BrandRepository $brandRepo */
            $brandRepo = $this->getDoctrine()->getRepository('WatchChallengeBundle:Brand');
            $brand = $brandRepo->findOneBy(array('id' => $data['brand_id']));
            $watch->setBrand($brand);
        }

        if (array_key_exists('case_material_id', $data) && $data['case_material_id']) {
            /** @var \WatchChallengeBundle\Repository\BrandRepository $caseMaterialRepo */
            $caseMaterialRepo = $this->getDoctrine()->getRepository('WatchChallengeBundle:CaseMaterial');
            $caseMaterial = $caseMaterialRepo->findOneBy(array('id' => $data['case_material_id']));
            $watch->setCaseMaterial($caseMaterial);
        }

        if (array_key_exists('condition_id', $data) && $data['condition_id']) {
            /** @var \WatchChallengeBundle\Repository\WatchConditionRepository $watchConditionRepo */
            $watchConditionRepo = $this->getDoctrine()->getRepository('WatchChallengeBundle:WatchCondition');
            $watchCondition = $watchConditionRepo->findOneBy(array('id' => $data['condition_id']));
            $watch->setCondition($watchCondition);
        }

        if (array_key_exists('watch_functions', $data) && $data['watch_functions'] && is_array($data['watch_functions'])) {
            /** @var \WatchChallengeBundle\Repository\WatchFunctionRepository $watchFunctionRepo */
            $watchFunctionRepo = $this->getDoctrine()->getRepository('WatchChallengeBundle:WatchFunction');
            foreach($data['watch_functions'] as $functionId){
                $function = $watchFunctionRepo->findOneBy(array('id' => $functionId));
                if(!empty($function)){
                    $watchFunctions[] = $function;
                }
            }
            $watch->setWatchFunctions($watchFunctions);
        }

        if (array_key_exists('model', $data) && $data['model']) {
            $watch->setModel($data['model']);
        }
        if (array_key_exists('case_site', $data) && $data['case_site']) {
            $watch->setModel($data['case_site']);
        }
        if (array_key_exists('sku', $data) && $data['sku']) {
            $watch->setModel($data['sku']);
        }
        if (array_key_exists('bracelet', $data) && $data['bracelet']) {
            $watch->setModel($data['bracelet']);
        }


        $em = $this->getDoctrine()->getEntityManager();
        foreach($request->files as $file){
            if(null === $file && in_array($file->getClientMimeType(), array('image/jpeg'))){
                continue;
            }
            $image = new WatchImage();
            $uniqid = uniqid('', true);
            $watch->addWatchImages($image);
            $image->setPath($image::BaseUrl . $uniqid . $file->getClientOriginalName());

            $file->move($image::BaseUrl, $uniqid . $file->getClientOriginalName());
            $em->persist($image);
            $em->persist($watch);
            $em->flush();
        }

        $em->persist($watch);
        $em->flush();

        return new JsonResponse(array(
            'watch' => $watch->toJson()
        ));
    }

    public function getAllAction()
    {
        /** @var \WatchChallengeBundle\Repository\WatchRepository $watchRepository */
        $watchRepository = $this->getDoctrine()->getRepository('WatchChallengeBundle:Watch');
        $items = $watchRepository->findAll();
        foreach ($items as $item) {
            $result[] = $item->toJson();
        }

        return new JsonResponse(array(
            'items' => $result
        ));
    }
}
