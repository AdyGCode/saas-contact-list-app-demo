<x-layouts.app :title="__('Demo')">
    <x-headbar title="{{__('Demo Of Components')}}">
        <p class="pb-4">
            <x-link href="{{route('demo-icons')}}"
                    class="text-sm text-gray-400">
                Icons are on a separate demo page
            </x-link>
        </p>
    </x-headbar>

    <div class="flex flex-col gap-4">
        <p>
            Use this page to add demos of components.
        </p>
        <x-section class="p-4">
            <header>
                <h2 class="text-xl text-gray-800 dark:text-gray-300 my-2">Typography</h2>
            </header>

            <div class="flex flex-col lg:grid lg:grid-cols-2 gap-4">
                <h3 class="text-gray-500">Heading</h3>
                <div>
                    <x-heading><h4>Default Heading</h4></x-heading>
                    <x-heading size="lg"><h4>LG Heading</h4></x-heading>
                    <x-heading size="xl"><h4>XL Heading</h4></x-heading>
                    <p class="mt-2">Wraps any HTML. Sets text size and colour.</p>
                </div>

                <h3 class="text-gray-500">Sub Heading</h3>
                <div>
                    <x-subheading size="xl"><h4>XL Sub Heading</h4></x-subheading>
                    <x-subheading size="lg"><h4>LG Sub Heading</h4></x-subheading>
                    <x-subheading size=""><h4>Default Sub Heading</h4></x-subheading>
                    <x-subheading size="sm"><h4>SM Sub Heading</h4></x-subheading>
                    <p class="mt-2">Wraps any HTML. Sets text size and colour.</p>
                </div>

                <h3 class="text-gray-500">Text</h3>
                <div>
                    <x-text size="xl"><p>XL text</p></x-text>
                    <x-text size="lg"><p>LG text</p></x-text>
                    <x-text size=""><p>Default text</p></x-text>
                    <x-text size="sm"><p>SM text</p></x-text>
                    <p class="mt-2">Wraps any HTML. Sets text size and colour.</p>
                </div>
            </div>
        </x-section>

        <x-section class="p-4">
            <header>
                <h2 class="text-xl text-gray-800 dark:text-gray-300 my-2">Spacers & Cards</h2>
            </header>

            <div class="flex flex-col lg:grid lg:grid-cols-2 gap-4">

                <h3 class="text-gray-500">Spacer</h3>
                <div class="flex">
                    <p>Spacer between</p>
                    <x-spacer/>
                    <p>Spacer between</p>
                </div>

                <h3 class="text-gray-500">Separator</h3>
                <div class="flex flex-col">
                    <p>Separator line between HTML content.</p>
                    <x-separator/>
                    <p>With text [requires component update]</p>
                    <x-separator text="or"/>
                    <p>Vertical [requires component update]</p>
                    <x-separator vertical/>
                    <p>End of demo</p>
                </div>

                <h3 class="text-gray-500">Card</h3>
                <div class="flex flex-col gap-4">
                    <x-card>Card</x-card>

                    <a href="#" aria-label="Latest on our blog">
                        <x-card size="sm" class="hover:bg-zinc-50 dark:hover:bg-zinc-700">
                            <x-heading class="flex items-center gap-2">Latest on our blog
                                <icon name="arrow-up-right" class="ml-auto text-zinc-400"
                                      variant="micro"/>
                            </x-heading>
                            <x-text class="mt-2">Stay up to date with our latest insights,
                                tutorials, and product updates.
                            </x-text>
                        </x-card>
                    </a>

                    <x-card class="space-y-6">
                        <div class="flex">
                            <div class="flex-1">
                                <x-heading size="lg">Are you sure?</x-heading>

                                <x-text class="mt-2">
                                    Your post will be deleted permanently.<br>
                                    This action cannot be undone.
                                </x-text>
                            </div>

                            <div class="-mx-2 -mt-2">
                                <x-button variant="ghost" size="sm" icon="x-mark"
                                          inset="top right bottom"/>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <x-spacer/>
                            <x-button variant="ghost">Undo</x-button>
                            <x-button variant="danger">Delete</x-button>
                        </div>
                    </x-card>

                    <x-card class="space-y-6">
                        <div>
                            <x-heading size="lg">Log in to your account</x-heading>
                            <x-text class="mt-2">Welcome back!</x-text>
                        </div>

                        <div class="space-y-6">
                            <x-input label="Email" type="email" placeholder="Your email address"
                                     name="email" id="email"/>

                            <x-field>
                                <div class="mb-3 flex justify-between">
                                    <x-label>Password</x-label>

                                    <x-link href="#" variant="subtle" class="text-sm">Forgot
                                        password?
                                    </x-link>
                                </div>

                                <x-input type="password" placeholder="Your password"
                                         name="password" id="password"/>

                            </x-field>
                        </div>

                        <div class="space-y-2">
                            <x-button variant="primary" class="w-full">Log in</x-button>

                            <x-button variant="ghost" class="w-full">Sign up for a new account
                            </x-button>
                        </div>
                    </x-card>

                    <x-card>
                        <x-heading size="lg">Are you sure?</x-heading>
                        <x-text class="mt-2 mb-4">
                            Your post will be deleted permanently.<br>
                            This action cannot be undone.
                        </x-text>
                        <x-button variant="danger">Delete</x-button>
                    </x-card>


                </div>
            </div>
        </x-section>

        <x-section class="p-4">
            <header>
                <h2 class="text-xl text-gray-800 dark:text-gray-300 my-2">Tables</h2>
            </header>

            <div class="flex flex-col lg:grid lg:grid-cols-2 gap-4">

                <h3 class="text-gray-500">Table</h3>
                <div class="flex flex-col">
                    @if($orders->isNotEmpty())
                        <x-table>
                            <x-slot:head>
                                <thead class="bg-gray-200">
                                <x-table.row>
                                    <x-table.col>Customer</x-table.col>
                                    <x-table.col>Date</x-table.col>
                                    <x-table.col>Status</x-table.col>
                                    <x-table.col>Amount</x-table.col>
                                    <x-table.col></x-table.col>
                                </x-table.row>
                                </thead>
                            </x-slot:head>
                            <x-slot:body>
                                <tbody>
                                @foreach ($orders as $order)
                                    <x-table.row :key="$order->id">
                                        <x-table.cell class="py-0">
                                            {{ $order->customer }}
                                        </x-table.cell>

                                        <x-table.cell class="whitespace-nowrap">
                                            {{\Carbon\Carbon::parse($order->date)->format('Y-m-d')}}
                                        </x-table.cell>

                                        <x-table.cell class="py-0">
                                            <x-badge size="sm"
                                                     :color="$order->status_color">{{ $order->status }}</x-badge>
                                        </x-table.cell>

                                        <x-table.cell
                                            variant="strong">{{ $order->amount }}</x-table.cell>

                                        <x-table.cell class="py-0">
                                            <x-button variant="ghost" size="sm"
                                                      icon="ellipsis-horizontal"></x-button>
                                        </x-table.cell>
                                    </x-table.row>
                                @endforeach
                                </tbody>
                            </x-slot:body>
                        </x-table>
                    @endif
                    <x-pagination class="mt-1" :paginator="$orders"/>
                </div>
            </div>
        </x-section>

        <x-section class="p-4">

            <header>
                <h2 class="text-xl text-gray-800 dark:text-gray-300 my-2">Actions & Messages</h2>
            </header>

            <div class="flex flex-col lg:grid lg:grid-cols-2 gap-4">

                <h3 class="text-gray-500">Action Message</h3>
                <x-badge>Message</x-badge>

                <h3 class="text-gray-500">Container</h3>
                <x-container class="bg-gray-100">Container</x-container>

                <h3 class="text-gray-500">Time</h3>
                <x-time :datetime="now()"/>

                <h3 class="text-gray-500">Form</h3>

                <x-form name="form" method="post" action="{{ route('demo-submit') }}">
                    <h5>Content of form</h5>

                    <x-input type="email" name="email" id="email" label="Email"
                             placeholder="a@b.c"/>

                    <div class="space-y-2">
                        <x-button variant="primary" class="w-full">Log in</x-button>
                    </div>
                </x-form>

                <h3 class="text-gray-500">Label</h3>
                <x-label for="checkbox">Form Control Label</x-label>
                <h3 class="text-gray-500">Checkbox</h3>
                <x-checkbox name="Checkbox" id="checkbox" label="Checkbox" :value="34"/>
                <h3 class="text-gray-500">Description</h3>
                <x-description for="checkbox">Description</x-description>

                <h3 class="text-gray-500">Radio</h3>
                <div class="flex gap-4">
                    <x-radio id="radio1" name="radio" label="ONE" :value="1"/>
                    <x-radio id="radio2" name="radio" label="TWO" checked :value="2"/>
                </div>

                <h3 class="text-gray-500">Select</h3>
                <x-select name="select" label="Select Box">
                    <option>Photography</option>
                    <option>Design services</option>
                    <option>Web development</option>
                    <option>Accounting</option>
                    <option>Legal services</option>
                    <option>Consulting</option>
                    <option>Other</option>
                </x-select>

                <h3 class="text-gray-500">Input</h3>
                <x-input name="input" id="input" label="Input"
                         placeholder="Placeholder text..."/>


                <h3 class="text-gray-500">Text Area</h3>
                <x-textarea name="textarea" id="textarea" label="Text Area"
                            placeholder="Placeholder text..." class="p-2"/>


                <h3 class="text-gray-500">Section</h3>
                <x-section class="p-4">Section content</x-section>

                <h3 class="text-gray-500">Link</h3>
                <x-link href="#">Link Text</x-link>

                <h3 class="text-gray-500">Legend</h3>
                <x-legend value="Legend content"/>

                <h3 class="text-gray-500">Headbar</h3>
                <x-headbar title="Head bar title" subtitle="Sub Title">
                    <p>Head bar content</p>
                    <ul class="flex gap-4">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </x-headbar>


            </div>
        </x-section>

    </div>
</x-layouts.app>
