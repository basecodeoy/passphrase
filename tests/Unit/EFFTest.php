<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit;

use BaseCodeOy\Passphrase\EFF;

it('should generate a random passphrase with the five dice list', function (): void {
    expect(EFF::useFiveDiceList()->generate(5))->toBeString();
});

it('should generate a random passphrase with the four dice list', function (): void {
    expect(EFF::useFourDiceList()->generate(5))->toBeString();
});

it('should generate a random passphrase with the unique three character list', function (): void {
    expect(EFF::useUniqueThreeCharacterList()->generate(5))->toBeString();
});

it('should generate a random passphrase with a custom separator', function (): void {
    expect(EFF::useFiveDiceList()->useSeperator('///')->generate(5))->toContain('///');
});
