<?php

declare(strict_types=1);

namespace pocketmine\block;

use pocketmine\math\AxisAlignedBB;

class Barrier extends Transparent {

    protected function recalculateCollisionBoxes(): array {
        return [AxisAlignedBB::one()];
    }

    public function isSolid(): bool {
        return true;
    }

    public function getLightFilter(): int {
        return 0;
    }
}
