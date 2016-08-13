<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Service\Directions;

use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Service\Base\Distance;
use Ivory\GoogleMap\Service\Base\Duration;

/**
 * @see http://code.google.com/apis/maps/documentation/javascript/reference.html#DirectionsLeg
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class DirectionsLeg
{
    /**
     * @var Distance|null
     */
    private $distance;

    /**
     * @var Duration|null
     */
    private $duration;

    /**
     * @var Duration|null
     */
    private $durationInTraffic;

    /**
     * @var string|null
     */
    private $endAddress;

    /**
     * @var Coordinate|null
     */
    private $endLocation;

    /**
     * @var string|null
     */
    private $startAddress;

    /**
     * @var Coordinate|null
     */
    private $startLocation;

    /**
     * @var DirectionsStep[]
     */
    private $steps = [];

    /**
     * @var mixed[]
     */
    private $viaWaypoints = [];

    /**
     * @return bool
     */
    public function hasDistance()
    {
        return $this->distance !== null;
    }

    /**
     * @return Distance|null
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param Distance|null $distance
     */
    public function setDistance(Distance $distance = null)
    {
        $this->distance = $distance;
    }

    /**
     * @return bool
     */
    public function hasDuration()
    {
        return $this->duration !== null;
    }

    /**
     * @return Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param Duration|null $duration
     */
    public function setDuration(Duration $duration = null)
    {
        $this->duration = $duration;
    }

    /**
     * @return bool
     */
    public function hasDurationInTraffic()
    {
        return $this->durationInTraffic !== null;
    }

    /**
     * @return Duration|null
     */
    public function getDurationInTraffic()
    {
        return $this->durationInTraffic;
    }

    /**
     * @param Duration|null $durationInTraffic
     */
    public function setDurationInTraffic(Duration $durationInTraffic = null)
    {
        $this->durationInTraffic = $durationInTraffic;
    }

    /**
     * @return bool
     */
    public function hasEndAddress()
    {
        return $this->endAddress !== null;
    }

    /**
     * @return string|null
     */
    public function getEndAddress()
    {
        return $this->endAddress;
    }

    /**
     * @param string|null $endAddress
     */
    public function setEndAddress($endAddress = null)
    {
        $this->endAddress = $endAddress;
    }

    /**
     * @return bool
     */
    public function hasEndLocation()
    {
        return $this->endLocation !== null;
    }

    /**
     * @return Coordinate|null
     */
    public function getEndLocation()
    {
        return $this->endLocation;
    }

    /**
     * @param Coordinate|null $endLocation
     */
    public function setEndLocation(Coordinate $endLocation = null)
    {
        $this->endLocation = $endLocation;
    }

    /**
     * @return bool
     */
    public function hasStartAddress()
    {
        return $this->startAddress !== null;
    }

    /**
     * @return string|null
     */
    public function getStartAddress()
    {
        return $this->startAddress;
    }

    /**
     * @param string|null $startAddress
     */
    public function setStartAddress($startAddress = null)
    {
        $this->startAddress = $startAddress;
    }

    /**
     * @return bool
     */
    public function hasStartLocation()
    {
        return $this->startLocation !== null;
    }

    /**
     * @return Coordinate|null
     */
    public function getStartLocation()
    {
        return $this->startLocation;
    }

    /**
     * @param Coordinate|null $startLocation
     */
    public function setStartLocation(Coordinate $startLocation = null)
    {
        $this->startLocation = $startLocation;
    }

    /**
     * @return bool
     */
    public function hasSteps()
    {
        return !empty($this->steps);
    }

    /**
     * @return DirectionsStep[]
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param DirectionsStep[] $steps
     */
    public function setSteps(array $steps)
    {
        $this->steps = [];
        $this->addSteps($steps);
    }

    /**
     * @param DirectionsStep[] $steps
     */
    public function addSteps(array $steps)
    {
        foreach ($steps as $step) {
            $this->addStep($step);
        }
    }

    /**
     * @param DirectionsStep $step
     *
     * @return bool
     */
    public function hasStep(DirectionsStep $step)
    {
        return in_array($step, $this->steps, true);
    }

    /**
     * @param DirectionsStep $step
     */
    public function addStep(DirectionsStep $step)
    {
        if (!$this->hasStep($step)) {
            $this->steps[] = $step;
        }
    }

    /**
     * @param DirectionsStep $step
     */
    public function removeStep(DirectionsStep $step)
    {
        unset($this->steps[array_search($step, $this->steps, true)]);
    }

    /**
     * @return bool
     */
    public function hasViaWaypoints()
    {
        return !empty($this->viaWaypoints);
    }

    /**
     * @return mixed[]
     */
    public function getViaWaypoints()
    {
        return $this->viaWaypoints;
    }

    /**
     * @param mixed[] $viaWaypoints
     */
    public function setViaWaypoints(array $viaWaypoints)
    {
        $this->viaWaypoints = $viaWaypoints;
    }
}