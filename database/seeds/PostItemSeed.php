<?php

use Illuminate\Database\Seeder;
use App\PostItem;

class PostItemSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_items')->delete();

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Room on Rent on Hatti Ban",
            'images' => "",
            'price' => 4000,
            'pricing' => 'monthly',
            'type' => 'room',
            'street_address' => 'Hatti Ban Street',
            'area_address' => 'Hatti Ban',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 2,
            'number_of_wash_room' => 1,
            'total_area' => 5000,
            'floor' => 1,
            'amenities' => json_decode(""),
            'description' => "Two rooms available for people with small family.",
            'logitude' => 27.7172,
            'latitude' => 85.3240,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Room on Rent on Baneswor",
            'images' => "",
            'price' => 6000,
            'pricing' => 'monthly',
            'type' => 'room',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 3000,
            'floor' => 2,
            'amenities' => json_decode(""),
            'description' => "One big room is available for single person.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Flat on Rent on Baneswor",
            'images' => "",
            'price' => 12000,
            'pricing' => 'monthly',
            'type' => 'flat',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Flat on Rent on Baneswor",
            'images' => "",
            'price' => 35000,
            'pricing' => 'monthly',
            'type' => 'flat',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Flat on Rent on Baneswor",
            'images' => "",
            'price' => 80000,
            'pricing' => 'monthly',
            'type' => 'flat',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Flat on Rent on Baneswor",
            'images' => "",
            'price' => 20000,
            'pricing' => 'monthly',
            'type' => 'flat',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Flat on Rent on Baneswor",
            'images' => "",
            'price' => 40000,
            'pricing' => 'monthly',
            'type' => 'flat',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Flat on Rent on Baneswor",
            'images' => "",
            'price' => 30000,
            'pricing' => 'monthly',
            'type' => 'flat',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Flat on Rent on Baneswor",
            'images' => "",
            'price' => 60000,
            'pricing' => 'monthly',
            'type' => 'flat',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Boys Hostel",
            'images' => "",
            'price' => 9500,
            'pricing' => 'monthly',
            'type' => 'hostel',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Girls Hostel",
            'images' => "",
            'price' => 9500,
            'pricing' => 'monthly',
            'type' => 'hostel',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Girls Hostel",
            'images' => "",
            'price' => 9500,
            'pricing' => 'monthly',
            'type' => 'hostel',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Girls Hostel",
            'images' => "",
            'price' => 9500,
            'pricing' => 'monthly',
            'type' => 'hostel',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Girls Hostel",
            'images' => "",
            'price' => 9500,
            'pricing' => 'monthly',
            'type' => 'hostel',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));

        PostItem::create(array(
            'user_id' => 1,
            'title' => "Paying Guest in Baneswor",
            'images' => "",
            'price' => 9500,
            'pricing' => 'monthly',
            'type' => 'paying_guest',
            'street_address' => 'Prayag Margh',
            'area_address' => 'Baneswor',
            'city_address' => 'Kathmandu',
            'number_of_bed_room' => 1,
            'number_of_wash_room' => 1,
            'total_area' => 30000,
            'floor' => 3,
            'amenities' => json_decode(""),
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'logitude' => 27.8172,
            'latitude' => 85.3340,
            'is_sold' => false
        ));
    }
}
