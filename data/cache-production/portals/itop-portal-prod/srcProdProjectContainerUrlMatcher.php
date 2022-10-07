<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // p_session_message_add
        if ('/session-message/add' === $pathinfo) {
            return array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\SessionMessageController::AddMessageAction',  '_route' => 'p_session_message_add',);
        }

        // p_home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\DefaultController::HomeAction',  '_route' => 'p_home',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_p_home;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'p_home'));
            }

            return $ret;
        }
        not_p_home:

        // p_user_profile_brick
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user(?:/(?P<sBrickId>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_user_profile_brick']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\UserProfileBrickController::DisplayAction',  'sBrickId' => NULL,));
        }

        if (0 === strpos($pathinfo, '/object')) {
            if (0 === strpos($pathinfo, '/object/create')) {
                // p_object_create
                if (preg_match('#^/object/create/(?P<sObjectClass>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_object_create']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::CreateAction',));
                }

                // p_object_create_from_factory
                if (0 === strpos($pathinfo, '/object/create-from-factory') && preg_match('#^/object/create\\-from\\-factory/(?P<sObjectClass>[^/]++)/(?P<sObjectId>[^/]++)/(?P<sEncodedMethodName>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_object_create_from_factory']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::CreateFromFactoryAction',));
                }

            }

            // p_object_edit
            if (0 === strpos($pathinfo, '/object/edit') && preg_match('#^/object/edit/(?P<sObjectClass>[^/]++)/(?P<sObjectId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_object_edit']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::EditAction',));
            }

            // p_object_view
            if (0 === strpos($pathinfo, '/object/view') && preg_match('#^/object/view/(?P<sObjectClass>[^/]++)/(?P<sObjectId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_object_view']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::ViewAction',));
            }

            if (0 === strpos($pathinfo, '/object/a')) {
                // p_object_apply_stimulus
                if (0 === strpos($pathinfo, '/object/apply-stimulus') && preg_match('#^/object/apply\\-stimulus/(?P<sStimulusCode>[^/]++)/(?P<sObjectClass>[^/]++)/(?P<sObjectId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_object_apply_stimulus']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::ApplyStimulusAction',));
                }

                // p_object_attachment_add
                if ('/object/attachment/add' === $pathinfo) {
                    return array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::AttachmentAction',  '_route' => 'p_object_attachment_add',);
                }

                // p_object_attachment_download
                if (0 === strpos($pathinfo, '/object/attachment/download') && preg_match('#^/object/attachment/download/(?P<sAttachmentId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_object_attachment_download']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::AttachmentAction',  'sOperation' => 'download',));
                }

            }

            elseif (0 === strpos($pathinfo, '/object/search')) {
                // p_object_search_from_attribute
                if (0 === strpos($pathinfo, '/object/search/from-attribute') && preg_match('#^/object/search/from\\-attribute/(?P<sTargetAttCode>[^/]++)(?:/(?P<sHostObjectClass>[^/]++)(?:/(?P<sHostObjectId>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_object_search_from_attribute']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::SearchFromAttributeAction',  'sHostObjectClass' => NULL,  'sHostObjectId' => NULL,));
                }

                // p_object_search_autocomplete
                if (0 === strpos($pathinfo, '/object/search/autocomplete') && preg_match('#^/object/search/autocomplete/(?P<sTargetAttCode>[^/]++)(?:/(?P<sHostObjectClass>[^/]++)(?:/(?P<sHostObjectId>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_object_search_autocomplete']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::SearchAutocompleteAction',  'sHostObjectClass' => NULL,  'sHostObjectId' => NULL,));
                }

                // p_object_search_generic
                if (preg_match('#^/object/search/(?P<sMode>[^/]++)/(?P<sTargetAttCode>[^/]++)(?:/(?P<sHostObjectClass>[^/]++)(?:/(?P<sHostObjectId>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_object_search_generic']), array (  'sMode' => '-sMode-',  'sHostObjectClass' => NULL,  'sHostObjectId' => NULL,));
                }

            }

            // p_object_get_information_json
            if ('/object/get-information/json' === $pathinfo) {
                return array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::GetInformationAsJsonAction',  '_route' => 'p_object_get_information_json',);
            }

            // p_object_document_display
            if (0 === strpos($pathinfo, '/object/document/display') && preg_match('#^/object/document/display/(?P<sObjectClass>[^/]++)/(?P<sObjectId>[^/]++)/(?P<sObjectField>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_object_document_display']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::DocumentAction',  'sOperation' => 'display',));
            }

            // p_object_document_download
            if (0 === strpos($pathinfo, '/object/document/download') && preg_match('#^/object/document/download/(?P<sObjectClass>[^/]++)/(?P<sObjectId>[^/]++)/(?P<sObjectField>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_object_document_download']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::DocumentAction',  'sOperation' => 'download',));
            }

        }

        // p_create_brick
        if (0 === strpos($pathinfo, '/create') && preg_match('#^/create/(?P<sBrickId>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_create_brick']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\CreateBrickController::DisplayAction',));
        }

        if (0 === strpos($pathinfo, '/browse')) {
            // p_browse_brick
            if (preg_match('#^/browse/(?P<sBrickId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_browse_brick']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController::DisplayAction',));
            }

            // p_browse_brick_mode
            if (preg_match('#^/browse/(?P<sBrickId>[^/]++)/(?P<sBrowseMode>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_browse_brick_mode']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController::DisplayAction',));
            }

            // p_browse_brick_mode_list
            if (preg_match('#^/browse/(?P<sBrickId>[^/]++)/list/page/(?P<iPageNumber>\\d+)/show(?:/(?P<iListLength>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_browse_brick_mode_list']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController::DisplayAction',  'sBrowseMode' => 'list',  'sDataLoading' => 'lazy',  'iPageNumber' => 1,  'iListLength' => 20,));
            }

            // p_browse_brick_mode_tree
            if (preg_match('#^/browse/(?P<sBrickId>[^/]++)/tree/expand/(?P<sLevelAlias>[^/]++)(?:/(?P<sNodeId>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_browse_brick_mode_tree']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController::DisplayAction',  'sBrowseMode' => 'tree',  'sDataLoading' => 'lazy',  'sNodeId' => NULL,));
            }

        }

        elseif (0 === strpos($pathinfo, '/manage')) {
            // p_manage_brick
            if (preg_match('#^/manage/(?P<sBrickId>[^/]++)(?:/(?P<sGroupingTab>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_manage_brick']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController::DisplayAction',  'sGroupingTab' => NULL,));
            }

            // p_manage_brick_display_as
            if (preg_match('#^/manage/(?P<sBrickId>[^/]++)/display\\-as/(?P<sDisplayMode>list|pie-chart|bar-chart)(?:/(?P<sGroupingTab>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_manage_brick_display_as']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController::DisplayAction',  'sGroupingTab' => NULL,));
            }

            // p_manage_brick_lazy
            if (preg_match('#^/manage/(?P<sBrickId>[^/]++)/(?P<sGroupingTab>[^/]++)/(?P<sGroupingArea>[^/]++)/page/(?P<iPageNumber>\\d+)/show(?:/(?P<iListLength>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_manage_brick_lazy']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController::DisplayAction',  'sDataLoading' => 'lazy',  'iPageNumber' => 1,  'iListLength' => 20,));
            }

            // p_manage_brick_excel_export_start
            if (0 === strpos($pathinfo, '/manage/export/excel/start') && preg_match('#^/manage/export/excel/start/(?P<sBrickId>[^/]++)/(?P<sGroupingTab>[^/]++)/(?P<sGroupingArea>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_manage_brick_excel_export_start']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController::ExcelExportStartAction',));
            }

        }

        // p_aggregatepage_brick
        if (0 === strpos($pathinfo, '/aggregate-page') && preg_match('#^/aggregate\\-page/(?P<sBrickId>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'p_aggregatepage_brick']), array (  '_controller' => 'Combodo\\iTop\\Portal\\Controller\\AggregatePageBrickController::DisplayAction',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
