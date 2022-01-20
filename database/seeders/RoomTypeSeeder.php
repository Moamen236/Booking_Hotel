<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [
                'name' => 'Single Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.',
                'price' => 89,
                'image' => 'single-room.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Double Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.',
                'price' => 129,
                'image' => 'double-room.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Deluxe Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.',
                'price' => 189,
                'image' => 'double-room.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Family Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.',
                'price' => 149,
                'image' => 'family-room.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'King Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.',
                'price' => 289,
                'image' => 'presidential-room.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Honeymoon Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.',
                'price' => 169,
                'image' => 'presidential-room.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Room with a view',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.',
                'price' => 119,
                'image' => 'presidential-room.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Luxury Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.',
                'price' => 349,
                'image' => 'presidential-room.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Small Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.',
                'price' => 39,
                'image' => 'presidential-room.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($rooms as $room) {
            RoomType::create($room);
        }
    }
}