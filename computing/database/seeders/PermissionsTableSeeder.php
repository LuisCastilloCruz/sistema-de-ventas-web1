<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::firstOrCreate(['name' => 'Admin']);
        $cashier = Role::firstOrCreate(['name' => 'Cashier']);
        $client = Role::firstOrCreate(['name' => 'Client']);
    
      

        Permission::firstOrCreate(['name'=>'users.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'users.create', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'users.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'users.show', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'users.edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'users.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'users.destroy', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'home', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'brands.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'brands.create', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'brands.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'brands.edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'brands.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'brands.destroy', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'tags.index', 'guard_name' => 'web']);

        Permission::firstOrCreate(['name'=>'tags.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'tags.create', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'tags.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'tags.edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'tags.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'tags.destroy', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'categories.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'categories.create', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'categories.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'categories.show', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'categories.edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'categories.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'categories.destroy', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'products.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'products.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'products.show', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'products.edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'products.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'products.destroy', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'posts.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'posts.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'posts.show', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'posts.edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'posts.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'posts.destroy', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'social_medias.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'social_medias.create', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'social_medias.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'social_medias.edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'social_medias.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'social_medias.destroy', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'sliders.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'sliders.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'sliders.edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'sliders.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'sliders.destroy', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'promotions.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'promotions.create', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'promotions.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'promotions.edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'promotions.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'promotions.destroy', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'clients.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'clients.create', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'clients.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'clients.show', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'clients.edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'clients.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'clients.destroy', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'providers.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'providers.create', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'providers.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'providers.show', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'providers.edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'providers.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'providers.destroy', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'roles.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'roles.show', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'printers.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'printers.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'orders.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'orders.show', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'sales.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'sales.create', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'sales.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'sales.show', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'purchases.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'purchases.create', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'purchases.store', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'purchases.show', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'business.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'business.update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'subscriptions.index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'subscriptions.destroy', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'update_product_status', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'mark_all_notifications', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'mark_a_notification', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'update_profile', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'orders_update', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'reports.day', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'reports.date', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'report.results', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'upload.image', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'upload_images_product', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'get.images', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'file.delete', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'purchases.pdf', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'sales.pdf', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'sales.print', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'upload.purchases', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'change.status.products', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'change.status.purchases', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'change.status.sales', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'get_products_by_barcode', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'get_products_by_id', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'print_barcode', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'get_subcategories', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'get_products_by_subcategory', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'pay', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'approval', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'cancelled', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'web.my_account', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'web.checkout', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'web.orders', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'web.order_details', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'web.account_info', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'web.address_edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'web.change_password', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'web.rate_product', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'web.update_client', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name'=>'web.update_password', 'guard_name' => 'web']);

        
        $admin->givePermissionTo([
            'users.index',
            'users.create',
            'users.store',
            'users.show',
            'users.edit',
            'users.update',
            'users.destroy',
            'home',
            'brands.index',
            'brands.create',
            'brands.store',
            'brands.edit',
            'brands.update',
            'brands.destroy',
            'tags.index',
            'tags.create',
            'tags.store',
            'tags.edit',
            'tags.update',
            'tags.destroy',
            'categories.index',
            'categories.create',
            'categories.store',
            'categories.show',
            'categories.edit',
            'categories.update',
            'categories.destroy',
            'products.index',
            'products.store',
            'products.show',
            'products.edit',
            'products.update',
            'products.destroy',
            'posts.index',
            'posts.store',
            'posts.show',
            'posts.edit',
            'posts.update',
            'posts.destroy',
            'social_medias.index',
            'social_medias.create',
            'social_medias.store',
            'social_medias.edit',
            'social_medias.update',
            'social_medias.destroy',
            'sliders.index',
            'sliders.store',
            'sliders.edit',
            'sliders.update',
            'sliders.destroy',
            'promotions.index',
            'promotions.create',
            'promotions.store',
            'promotions.edit',
            'promotions.update',
            'promotions.destroy',
            'clients.index',
            'clients.create',
            'clients.store',
            'clients.show',
            'clients.edit',
            'clients.update',
            'clients.destroy',
            'providers.index',
            'providers.create',
            'providers.store',
            'providers.show',
            'providers.edit',
            'providers.update',
            'providers.destroy',
            'roles.index',
            'roles.show',
            'printers.index',
            'printers.update',
            'orders.index',
            'orders.show',
            'sales.index',
            'sales.create',
            'sales.store',
            'sales.show',
            'purchases.index',
            'purchases.create',
            'purchases.store',
            'purchases.show',
            'business.index',
            'business.update',
            'subscriptions.index',
            'subscriptions.destroy',
            'update_product_status',
            'mark_all_notifications',
            'mark_a_notification',
            'update_profile',
            'orders_update',
            'reports.day',
            'reports.date',
            'report.results',
            'upload.image',
            'upload_images_product',
            'get.images',
            'file.delete',
            'purchases.pdf',
            'sales.pdf',
            'sales.print',
            'upload.purchases',
            'change.status.products',
            'change.status.purchases',
            'change.status.sales',
            'get_products_by_barcode',
            'get_products_by_id',
            'print_barcode',
            'get_subcategories',
            'get_products_by_subcategory',
            'pay',
            'approval',
            'cancelled',
            'web.my_account',
            'web.checkout',
            'web.orders',
            'web.order_details',
            'web.account_info',
            'web.address_edit',
            'web.change_password',
            'web.rate_product',
            'web.update_client',
            'web.update_password'
        ]);

        $cashier->givePermissionTo([
            'home',
            'clients.index',
            'clients.create',
            'clients.store',
            'clients.show',
            'clients.edit',
            'clients.update',
            'clients.destroy',
			'orders.index',
            'orders.show',
			'sales.index',
            'sales.create',
            'sales.store',
            'sales.show',
            'purchases.index',
            'purchases.create',
            'purchases.store',
            'purchases.show',
			'update_product_status',
            'mark_all_notifications',
            'mark_a_notification',
			'orders_update',
			'reports.day',
            'reports.date',
            'report.results',
			'purchases.pdf',
			'sales.pdf',
            'sales.print',
			'upload.purchases',
			'change.status.purchases',
			'change.status.sales',
			'get_products_by_barcode',
            'get_products_by_id',
			'print_barcode',
        ]);

        $client->givePermissionTo([
            'pay',
            'approval',
            'cancelled',
            'web.my_account',
            'web.checkout',
            'web.orders',
            'web.order_details',
            'web.account_info',
            'web.address_edit',
            'web.change_password',
            'web.rate_product',
            'web.update_client',
            'web.update_password'
        ]);

        $admin_user = User::create([
            'name'=>'Admin',
            'email'=>'Admin@gmail.com',
            'password'=>'$2y$10$o.CnHSqHSCQ7qSj4zlJU7u0N1QiKqrIjJ2bLP8j/wdw3W8NCA3DkK',
        ]);
        $admin_user->profile()->create();
        $admin_user->assignRole('Admin');

        $cashier_user = User::create([
            'name'=>'Cashier',
            'email'=>'Cashier@gmail.com',
            'password'=>'$2y$10$o.CnHSqHSCQ7qSj4zlJU7u0N1QiKqrIjJ2bLP8j/wdw3W8NCA3DkK',
        ]);
        $cashier_user->profile()->create();
        $cashier_user->assignRole('Cashier');

        $client_user = User::create([
            'name'=>'Client',
            'email'=>'Client@gmail.com',
            'password'=>'$2y$10$o.CnHSqHSCQ7qSj4zlJU7u0N1QiKqrIjJ2bLP8j/wdw3W8NCA3DkK',
        ]);
        $client_user->profile()->create();
        $client_user->assignRole('Client');
        
    }
}
