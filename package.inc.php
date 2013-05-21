<?php
define('__MLC_NAMESPACE__', dirname(__FILE__));
define('__MLC_NAMESPACE_CORE__', __MLC_NAMESPACE__ . '/_core');


define('__MLC_NAMESPACE_CORE_CTL__', __MLC_NAMESPACE_CORE__ . '/ctl');
define('__MLC_NAMESPACE_CORE_MODEL__', __MLC_NAMESPACE_CORE__ . '/model');
define('__MLC_NAMESPACE_CORE_VIEW__', __MLC_NAMESPACE_CORE__ . '/view');
define('__MLC_NAMESPACE_CG__', __MLC_NAMESPACE__ . '/_codegen');
MLCApplicationBase::$arrClassFiles['MLCNamespaceDriver'] = __MLC_NAMESPACE_CORE_MODEL__ . '/MLCNamespaceDriver.class.php';

//DataLayer
MLCApplicationBase::$arrClassFiles['MLCNamespace'] = __MLC_NAMESPACE_CORE_MODEL__ . '/data_layer/MLCNamespace.class.php';
//CTL



require_once(__MLC_NAMESPACE_CORE_MODEL__ . '/_exceptions.inc.php');
