<?php
namespace DNJ\PHPVMOMI\ManagedObjects;

use DNJ\PHPVMOMI\DataObjects\Event;

/**
 * @todo complete
 * @see https://vdc-download.vmware.com/vmwb-repository/dcr-public/b50dcbbf-051d-4204-a3e7-e1b618c1e384/538cf2ec-b34f-4bae-a332-3820ef9e7773/vim.Task.html
 */
class Task extends ManagedEntity
{
	use actions\NeedAPITrait,
		actions\TaskTrait;

	public const TYPE = 'Task';

}
