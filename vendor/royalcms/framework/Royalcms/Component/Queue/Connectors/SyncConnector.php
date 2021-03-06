<?php namespace Royalcms\Component\Queue\Connectors;

use Royalcms\Component\Queue\SyncQueue;

class SyncConnector implements ConnectorInterface {

	/**
	 * Establish a queue connection.
	 *
	 * @param  array  $config
	 * @return \Royalcms\Component\Queue\QueueInterface
	 */
	public function connect(array $config)
	{
		return new SyncQueue;
	}

}
