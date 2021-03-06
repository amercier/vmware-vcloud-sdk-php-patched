<?php
class VMware_VCloud_API_QueryResultServiceLinkRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $mimeType = null;
    protected $service = null;
    protected $resourceType = null;
    protected $resourceId = null;
    protected $linkHref = null;
    protected $rel = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param VMware_VCloud_API_MetadataType $Metadata - [optional]
    * @param string $mimeType - [optional] an attribute, 
    * @param string $service - [optional] an attribute, 
    * @param string $resourceType - [optional] an attribute, 
    * @param string $resourceId - [optional] an attribute, 
    * @param string $linkHref - [optional] an attribute, 
    * @param string $rel - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $mimeType=null, $service=null, $resourceType=null, $resourceId=null, $linkHref=null, $rel=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->mimeType = $mimeType;
        $this->service = $service;
        $this->resourceType = $resourceType;
        $this->resourceId = $resourceId;
        $this->linkHref = $linkHref;
        $this->rel = $rel;
        $this->tagName = 'ServiceLinkRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_mimeType(){
        return $this->mimeType;
    }
    public function set_mimeType($mimeType) {
        $this->mimeType = $mimeType;
    }
    public function get_service(){
        return $this->service;
    }
    public function set_service($service) {
        $this->service = $service;
    }
    public function get_resourceType(){
        return $this->resourceType;
    }
    public function set_resourceType($resourceType) {
        $this->resourceType = $resourceType;
    }
    public function get_resourceId(){
        return $this->resourceId;
    }
    public function set_resourceId($resourceId) {
        $this->resourceId = $resourceId;
    }
    public function get_linkHref(){
        return $this->linkHref;
    }
    public function set_linkHref($linkHref) {
        $this->linkHref = $linkHref;
    }
    public function get_rel(){
        return $this->rel;
    }
    public function set_rel($rel) {
        $this->rel = $rel;
    }
    public function get_tagName() { return $this->tagName; }
    public function set_tagName($tagName) { $this->tagName = $tagName; }
    public function export($name=null, $out='', $level=0, $namespacedef=null, $namespace=null, $rootNS=null) {
        if (!isset($name)) {
            $name = $this->tagName;
        }
        $out = VMware_VCloud_API_Helper::showIndent($out, $level);
        if (is_null($namespace)) {
            $namespace = self::$defaultNS;
        }
        if (is_null($rootNS)) {
            $rootNS = self::$defaultNS;
        }
        if (NULL === $namespacedef) {
            $namespacedef = $this->namespacedef;
            if (0 >= strpos($namespacedef, 'xmlns=')) {
                $namespacedef = ' xmlns="' . self::$defaultNS . '"' . $namespacedef;
            }
        }
        $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, $name, self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, '<' . $ns . $name . $namespacedef);
        $out = $this->exportAttributes($out, $level, $name, $namespacedef, $namespace, $rootNS);
        if ($this->hasContent()) {
            $out = VMware_VCloud_API_Helper::addString($out, ">\n");
            $out = $this->exportChildren($out, $level + 1, $name, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $out = VMware_VCloud_API_Helper::addString($out, "</" . $ns . $name . ">\n");
        } else {
            $out = VMware_VCloud_API_Helper::addString($out, "/>\n");
        }
        return $out;
    }
    protected function exportAttributes($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportAttributes($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->mimeType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'mimeType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'mimeType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->mimeType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='mimeType')));
        }
        if (!is_null($this->service)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'service', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'service=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->service, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='service')));
        }
        if (!is_null($this->resourceType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'resourceType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'resourceType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->resourceType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='resourceType')));
        }
        if (!is_null($this->resourceId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'resourceId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'resourceId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->resourceId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='resourceId')));
        }
        if (!is_null($this->linkHref)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'linkHref', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'linkHref=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->linkHref, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='linkHref')));
        }
        if (!is_null($this->rel)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'rel', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'rel=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->rel, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='rel')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        return $out;
    }
    protected function hasContent() {
        if (
            parent::hasContent()
            ) {
            return true;
        } else {
            return false;
        }
    }
    public function build($node, $namespaces='') {
        $tagName = $node->tagName;
        $this->tagName = $tagName;
        if (strpos($tagName, ':') > 0) {
            list($namespace, $tagName) = explode(':', $tagName);
            $this->tagName = $tagName;
            $this->namespace[$tagName] = $namespace;
        }
        $this->buildAttributes($node, $namespaces);
        $children = $node->childNodes;
        foreach ($children as $child) {
            if ($child->nodeType == XML_ELEMENT_NODE || $child->nodeType == XML_TEXT_NODE) {
                $namespace = '';
                $nodeName = $child->nodeName;
                if (strpos($nodeName, ':') > 0) {
                    list($namespace, $nodeName) = explode(':', $nodeName);
                }
                $this->buildChildren($child, $nodeName, $namespace);
            }
        }
    }
    protected function buildAttributes($node, $namespaces='') {
        $attrs = $node->attributes;
        if (!empty($namespaces)) {
            $this->namespacedef = VMware_VCloud_API_Helper::constructNS($attrs, $namespaces, $this->namespacedef) . $this->namespacedef;
        }
        $nsUri = self::$defaultNS;
        $ndmimeType = $attrs->getNamedItem('mimeType');
        if (!is_null($ndmimeType)) {
            $this->mimeType = $ndmimeType->value;
            if (isset($ndmimeType->prefix)) {
                $this->namespace['mimeType'] = $ndmimeType->prefix;
                $nsUri = $ndmimeType->lookupNamespaceURI($ndmimeType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'mimeType');
        } else {
            $this->mimeType = null;
        }
        $ndservice = $attrs->getNamedItem('service');
        if (!is_null($ndservice)) {
            $this->service = $ndservice->value;
            if (isset($ndservice->prefix)) {
                $this->namespace['service'] = $ndservice->prefix;
                $nsUri = $ndservice->lookupNamespaceURI($ndservice->prefix);
            }
            $node->removeAttributeNS($nsUri, 'service');
        } else {
            $this->service = null;
        }
        $ndresourceType = $attrs->getNamedItem('resourceType');
        if (!is_null($ndresourceType)) {
            $this->resourceType = $ndresourceType->value;
            if (isset($ndresourceType->prefix)) {
                $this->namespace['resourceType'] = $ndresourceType->prefix;
                $nsUri = $ndresourceType->lookupNamespaceURI($ndresourceType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'resourceType');
        } else {
            $this->resourceType = null;
        }
        $ndresourceId = $attrs->getNamedItem('resourceId');
        if (!is_null($ndresourceId)) {
            $this->resourceId = $ndresourceId->value;
            if (isset($ndresourceId->prefix)) {
                $this->namespace['resourceId'] = $ndresourceId->prefix;
                $nsUri = $ndresourceId->lookupNamespaceURI($ndresourceId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'resourceId');
        } else {
            $this->resourceId = null;
        }
        $ndlinkHref = $attrs->getNamedItem('linkHref');
        if (!is_null($ndlinkHref)) {
            $this->linkHref = $ndlinkHref->value;
            if (isset($ndlinkHref->prefix)) {
                $this->namespace['linkHref'] = $ndlinkHref->prefix;
                $nsUri = $ndlinkHref->lookupNamespaceURI($ndlinkHref->prefix);
            }
            $node->removeAttributeNS($nsUri, 'linkHref');
        } else {
            $this->linkHref = null;
        }
        $ndrel = $attrs->getNamedItem('rel');
        if (!is_null($ndrel)) {
            $this->rel = $ndrel->value;
            if (isset($ndrel->prefix)) {
                $this->namespace['rel'] = $ndrel->prefix;
                $nsUri = $ndrel->lookupNamespaceURI($ndrel->prefix);
            }
            $node->removeAttributeNS($nsUri, 'rel');
        } else {
            $this->rel = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}