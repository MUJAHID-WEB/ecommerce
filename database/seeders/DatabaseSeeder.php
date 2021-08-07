<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Size;
use App\Models\Unit;
use App\Models\MainCategory;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Writer;
use App\Models\Publication;
use App\Models\Product;
use App\Models\Status;
use App\Models\Image;
use App\Models\Vendor;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        MainCategory::truncate();
        Category::truncate();
        SubCategory::truncate();
        Brand::truncate();
        Writer::truncate();
        Publication::truncate();
        Color::truncate();
        Size::truncate();
        Unit::truncate();
        Vendor::truncate();
        Product::truncate();
        Image::truncate();
        Status::truncate();
        
        // brand

        $data = [
            [
                'name' => strtolower('Nike'),
                'logo' => 'http://lorempixel.com/200/200/transport/1/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Nike')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Addidas'),
                'logo' => 'http://lorempixel.com/200/200/transport/2/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Addidas')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Fila'),
                'logo' => 'http://lorempixel.com/200/200/transport/3/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Fila')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Gucci'),
                'logo' => 'http://lorempixel.com/200/200/transport/4/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Gucci')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Puma'),
                'logo' => 'http://lorempixel.com/200/200/transport/5/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Puma')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]
        ];
        Brand::insert($data);

        // Writer

        $data = [
            [
                'name' => strtolower('Mujahidul Islam'),
                'description' => str_shuffle("Loren ipsum dolor sit ament"),
                'image' => 'http://lorempixel.com/200/200/people/1/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Mujahidul Islam')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Maruf Allam'),
                'description' => str_shuffle("Loren ipsum dolor sit ament"),
                'image' => 'http://lorempixel.com/200/200/people/2/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Maruf Allam')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Subha An-Noor'),
                'description' => str_shuffle("Loren ipsum dolor sit ament"),
                'image' => 'http://lorempixel.com/200/200/people/3/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Subha An-Noor')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Abdul Mozid'),
                'description' => str_shuffle("Loren ipsum dolor sit ament"),
                'image' => 'http://lorempixel.com/200/200/people/4/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Abdul Mozid')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Mahmudur Rahman'),
                'description' => str_shuffle("Loren ipsum dolor sit ament"),
                'image' => 'http://lorempixel.com/200/200/people/5/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Mahmudur Rahman')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]
        ];
        Writer::insert($data);

        // Publication

        $data = [
            [
                'name' => strtolower('Sheba Prokashoni'),
                'description' => str_shuffle("Loren ipsum dolor sit ament"),
                'image' => 'http://lorempixel.com/200/200/product/1/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Sheba Prokashoni')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Adhunit Prokashoni'),
                'description' => str_shuffle("Loren ipsum dolor sit ament"),
                'image' => 'http://lorempixel.com/200/200/product/2/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Adhunit Prokashoni')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Shourob Prokashoni'),
                'description' => str_shuffle("Loren ipsum dolor sit ament"),
                'image' => 'http://lorempixel.com/200/200/product/3/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Shourob Prokashoni')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Bangla Academy'),
                'description' => str_shuffle("Loren ipsum dolor sit ament"),
                'image' => 'http://lorempixel.com/200/200/product/4/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Bangla Academy')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Jadughor Prokashoni'),
                'description' => str_shuffle("Loren ipsum dolor sit ament"),
                'image' => 'http://lorempixel.com/200/200/product/5/',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Jadughor Prokashoni')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]
        ];
        Publication::insert($data);

        // Color

        $data = [
            [
                'name' => strtolower('White'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('White')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Black'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('Black')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Red'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('Red')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Blue'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('Blue')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Yellow'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('Yellow')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]
        ];
        Color::insert($data);


        // Size

        $data = [
            [
                'name' => strtolower('XXL'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('XXL')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('XL'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('XL')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('L'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('L')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('SM'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('SM')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]
        ];
        Size::insert($data);


        // Unit

        $data = [
            [
                'name' => strtolower('KG'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('KG')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('LT'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('LT')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('MTR'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('MTR')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('G'),
                'creator' =>1,
                'slug' => Str::slug(strtolower('G')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]
        ];
        Unit::insert($data);


        // Status

        $data = [
            [
                'name' => strtolower('Active'),
                'serial' =>1,
                'creator' =>1,
                'slug' => Str::slug(strtolower('Active')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Pending'),
                'serial' =>2,
                'creator' =>1,
                'slug' => Str::slug(strtolower('Pending')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Processing'),
                'serial' =>3,
                'creator' =>1,
                'slug' => Str::slug(strtolower('Processing')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Shipping'),
                'serial' =>4,
                'creator' =>1,
                'slug' => Str::slug(strtolower('Shipping')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Delivered'),
                'serial' =>5,
                'creator' =>1,
                'slug' => Str::slug(strtolower('Delivered')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Cancelled'),
                'serial' =>6,
                'creator' =>1,
                'slug' => Str::slug(strtolower('Cancelled')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Draft'),
                'serial' =>7,
                'creator' =>1,
                'slug' => Str::slug(strtolower('Draft')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]
            
        ];
        Status::insert($data);


        // Vendor

        $data = [
            [
                'name' => strtolower('Mr. Kashem'),
                'email' => 'kashem@gmail.com',
                'address' => 'Newakhali',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Mr. Kashem')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Mr. Shahin'),
                'email' => 'shahin@gmail.com',
                'address' => 'Badda',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Mr. Shahin')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Mr. Jewel'),
                'email' => 'jewel@gmail.com',
                'address' => 'Uttara',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Mr. Jewel')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Mr. Ismat Abir'),
                'email' => 'abir@gmail.com',
                'address' => 'Maymenshing',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Mr. Ismat Abir')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => strtolower('Mr. M.A. Toslim'),
                'email' => 'toslim@gmail.com',
                'address' => 'Khulna',
                'creator' =>1,
                'slug' => Str::slug(strtolower('Mr. M.A. Toslim')),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]
        ];
        Vendor::insert($data);


        // Image

        for ($i=1; $i <=20 ; $i++) { 
            Image::insert([
                'name' => 'dummy_product/'.$i.".jpg",
                'creator' =>1,
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
        }


        $category = [
            'main_category' =>[
                "Men's" =>[
                    "Gent's Watch" =>[
                        'rolex', 
                        'casio', 
                        'apple'
                    ],
                    "Clothing" =>[
                        't-shirt',
                        'panjabi'
                    ],
                    "Grooming & Wellness" =>[
                        'body spray',
                        'suit'
                    ],
                ],
                "Women's" =>[
                    "saree" =>[
                        'jamdani',
                        'silk'
                    ],
                    "kurti" =>[
                        'boil',
                        'jamaidori',
                        'katan'
                    ],
                    "Jewelry" =>[
                        'neckless',
                        'bresless',
                        'nupur'
                    ],
                ],
                "Baby & Kids" =>[
                    "Toys & Games" =>[
                        'auto cars',
                        'Tic Toe',
                        'Cricket'
                    ],
                    "Kid's Footwear" =>[
                        'Shoe',
                        'moja'
                    ],
                    "Baby Food" =>[
                        'Milk',
                        'Dano',
                        'oats'
                    ],
                ],
                "Food & Grocery" =>[
                    "Rice" =>[
                        'Ataf',
                        'Chini Gura'
                    ],
                    "Dal"=>[
                        'Mosur',
                        'Mas Kalai',
                        'Mug dal'
                    ],
                    "Oil" =>[
                        'Soyabin',
                        'Sorisha'
                    ],
                ],
                "Medicine"=>[
                    "Cream"=>[
                        'Vetnobate',
                        'Oral gel'
                    ],
                    "Gel"=>[
                        'Burn Cream'
                    ],
                    "Spray" =>[
                        'Moov'
                    ],
                ],
                "Mobile"=>[
                    "Maximus"=>[
                        'Mobile',
                        'Ear Phone'
                    ],
                    "Huwaui"=>[
                        'Mobile',
                        'Ear Phone'
                    ],
                    "Remax"=>[
                        'Mobile',
                        'Ear Phone'
                    ],
                ],
                "Home & Kitchen"=>[
                    "Knife"=>[],
                    "Spice"=>[],
                    "Noodles"=>[]
                ],
                "Books"=>[
                    "History"=>[],
                    "Islamic"=>[],
                    "Nobel"=>[]
                ],
                "Service"=>[
                    "Desktop"=>[],
                    "Laptop"=>[],
                    "Ink"=>[]
                ],
                "Computer"=>[
                    "Mouse"=>[],
                    "Monitor"=>[],
                    "Keyboard"=>[]
                ],
                "Stationary"=>[
                    "Pen"=>[],
                    "Pencil"=>[],
                    "Table"=>[]
                ],
                "Gift Item"=>[
                    "Show Piece"=>[],
                    "Doll"=>[],
                    "Photo Frame"=>[]
                ],
                "Hot Deal"=>[
                    "Combo Offer"=>[],
                    "Special Offer"=>[],
                    
                ]
            ]
        ];

        foreach ($category ['main_category'] as $key => $value) {
            $main_id = MainCategory:: insertGetId([
                'name' => $key,
                'creator' =>1,
                'slug' => Str::slug(strtolower($key)),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
            foreach ($value as $key2 => $value2) {
                $category_id = Category:: insertGetId([
                    'name' => $key2,
                    'main_category_id' => $main_id,
                    'creator' =>1,
                    'slug' => Str::slug(strtolower($key2)),
                    'created_at' => Carbon::now()->toDateTimeString(),
                ]);
                foreach ($value2 as $key3 => $value3) {
                    SubCategory:: insert([
                        'name' => $value3,
                        'main_category_id' => $main_id,
                        'category_id' => $category_id,
                        'creator' =>1,
                        'slug' => Str::slug(strtolower($value3)),
                        'created_at' => Carbon::now()->toDateTimeString(),
                    ]);
                    
                }
                
            }
            
        }

        //Products

        $product = new Product();
        $product ->name = 'Adipiscing Cursus Eu';
        $product ->brand_id = rand(1, Brand::count());
        $product ->tax =15;
        $product ->price = rand(200,600);
        $product ->sku = 'SKU'.rand(500,5000);

        $product ->stock = rand(700,100);
        $product ->discount_price = rand(0,20);
        $product ->expiration_date = Carbon::now()->year.'/12/12';
        $product ->minimum_amount = rand(10,20);
        $product ->free_delivery = rand(0,1);
        $product ->total_view = rand(50,200);
        $product ->description = "Loren ipsum dolor sit ament"; 
        $product ->features = "<ul><li>Lorem ipsum</li><li>Lorem ipsum</li><li>Lorem ipsum</li></ul>";
        // $product ->thumb_image = rand(1, Image::count());
        $product -> thumb_image = "dummy_product/".rand(1,20).".jpg";
        $product ->code = 'PRO-'.Carbon::now()->year.Carbon::now()->month.$product->id;

        $product ->creator = 1;
        $product ->slug = Str::slug($product->name).'-'.Carbon::now()->year.Carbon::now()->month.$product->id;
        $product ->created_at = Carbon::now()->toDateTimeString();
        $product ->save();

        DB::table('main_category_product')->truncate();
        DB::table('main_category_product')->insert([
            'main_category_id'=>1,'product_id'=>$product->id
        ]);

        DB::table('category_product')->truncate();
        DB::table('category_product')->insert([
            ['category_id'=>1,'product_id'=>$product->id],
            ['category_id'=>2,'product_id'=>$product->id],
            ['category_id'=>3,'product_id'=>$product->id]
        ]);

        DB::table('product_sub_category')->truncate();
        DB::table('product_sub_category')->insert([
            ['sub_category_id'=>1,'product_id'=>$product->id],
            ['sub_category_id'=>2,'product_id'=>$product->id],
            ['sub_category_id'=>3,'product_id'=>$product->id]
        ]);

        DB::table('color_product')->truncate();
        DB::table('color_product')->insert([
            ['color_id'=>1,'product_id'=>$product->id],
            ['color_id'=>2,'product_id'=>$product->id],
            ['color_id'=>3,'product_id'=>$product->id]
        ]);

        DB::table('product_size')->truncate();
        DB::table('product_size')->insert([
            ['size_id'=>1,'product_id'=>$product->id],
            ['size_id'=>2,'product_id'=>$product->id],
            ['size_id'=>3,'product_id'=>$product->id]
        ]);

        DB::table('product_unit')->truncate();
        DB::table('product_unit')->insert([
            ['unit_id'=>1,'product_id'=>$product->id],
            ['unit_id'=>2,'product_id'=>$product->id],
            ['unit_id'=>3,'product_id'=>$product->id]
        ]);

        DB::table('product_vendor')->truncate();
        DB::table('product_vendor')->insert([
            ['vendor_id'=>1,'product_id'=>$product->id],
            ['vendor_id'=>2,'product_id'=>$product->id],
            ['vendor_id'=>3,'product_id'=>$product->id]
        ]);

        DB::table('product_writer')->truncate();
        DB::table('product_writer')->insert([
            ['writer_id'=>1,'product_id'=>$product->id],
            ['writer_id'=>2,'product_id'=>$product->id],
            ['writer_id'=>3,'product_id'=>$product->id]
        ]);

        DB::table('product_publication')->truncate();
        DB::table('product_publication')->insert([
            ['publication_id'=>1,'product_id'=>$product->id],
            ['publication_id'=>2,'product_id'=>$product->id],
            ['publication_id'=>3,'product_id'=>$product->id]
        ]);

        DB::table('image_product')->truncate();
        DB::table('image_product')->insert([
            ['image_id'=>rand(1,5),'product_id'=>$product->id],
            ['image_id'=>rand(6,10),'product_id'=>$product->id],
            ['image_id'=>rand(11,15),'product_id'=>$product->id],
            ['image_id'=>rand(15,20),'product_id'=>$product->id]
        ]);
    }
}
