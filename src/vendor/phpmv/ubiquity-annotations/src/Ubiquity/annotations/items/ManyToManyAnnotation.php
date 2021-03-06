<?php

namespace Ubiquity\annotations\items;

/**
 * Annotation ManyToMany.
 * usages :
 * - manyToMany("targetEntity"=>"classname")
 * - manyToMany("targetEntity"=>"classname","inversedBy"=>"memberName")
 * - manyToMany("targetEntity"=>"classname","inversedBy"=>"memberName","mappedBy"=>"memberName")
 *
 * @author jc
 * @version 1.0.3
 */
class ManyToManyAnnotation extends BaseAnnotation {
	public $targetEntity;
	public $inversedBy;
	public $mappedBy;
	public $cascade;
}
