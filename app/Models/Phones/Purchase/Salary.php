<?php

namespace App\Models\Phones\Purchase;

class Salary
{
    public function calculateSalary($currentSalary, $phonePrice, $user)
    {
        $result = $currentSalary - $phonePrice;

        if ($result < 0) {
            return false;
        }

        $newSalary = $currentSalary - $phonePrice;

        $this->updateSalary($user, $newSalary);

        return $newSalary;
    }

    public function updateSalary($user, $newSalary)
    {

        if ($newSalary < 0) {
            return false;
        }

        $user->update([
            'salary' => $newSalary
        ]);

        return true;
    }
}