#!/bin/bash

set -e

echo "🚀 Setting up Laravel project..."

# Composer install
echo ""
echo "📦 Installing PHP dependencies..."
composer install

# Generate app key
echo ""
echo "🔑 Generating application key..."
php artisan key:generate

# Run migrations
echo ""
echo "🗄️  Running database migrations..."
php artisan migrate

# NPM install
echo ""
echo "📦 Installing Node dependencies..."
npm install

# Build assets
echo ""
echo "🔨 Building front-end assets..."
npm run dev &

# Serve
echo ""
echo "✅ Starting Laravel development server..."
php artisan serve --port=8080
