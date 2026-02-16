<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\Seller;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
    /**
     * Determine whether the seller can view any models.
     */
    public function viewAny(Seller $seller): bool
    {
        return true;
    }

    /**
     * Determine whether the seller can view the model.
     */
    public function view(Seller $seller, Product $product): bool
    {
        return true;
    }

    /**
     * Determine whether the seller can create models.
     */
    public function create(Seller $seller): bool
    {
        return true;
    }

    /**
     * Determine whether the seller can update the model.
     */
    public function update(Seller $seller, Product $product): bool
    {
        return $seller->id === $product->seller_id;
    }

    /**
     * Determine whether the seller can delete the model.
     */
    public function delete(Seller $seller, Product $product): bool
    {
        return $seller->id === $product->seller_id;
    }

    /**
     * Determine whether the seller can restore the model.
     */
    public function restore(Seller $seller, Product $product): bool
    {
        return $seller->id === $product->seller_id;
    }

    /**
     * Determine whether the seller can permanently delete the model.
     */
    public function forceDelete(Seller $seller, Product $product): bool
    {
        return $seller->id === $product->seller_id;
    }
}
