<?php

declare(strict_types=1);


/**
 * Circles - Bring cloud-users closer together.
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Maxence Lange <maxence@artificial-owl.com>
 * @copyright 2021
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


namespace OCA\Circles\Events;

use OCA\Circles\Model\Membership;
use OCP\EventDispatcher\Event;

/**
 * Class MembershipsRemovedEvent
 *
 * @package OCA\Circles\Events
 */
class MembershipsRemovedEvent extends Event {
	/** @var Membership[] */
	private $memberships;


	/**
	 * MembershipsRemovedEvent constructor.
	 *
	 * @param Membership[] $memberships
	 */
	public function __construct(array $memberships) {
		parent::__construct();

		$this->memberships = $memberships;
	}


	/**
	 * @return Membership[]
	 */
	public function getMemberships(): array {
		return $this->memberships;
	}
}
