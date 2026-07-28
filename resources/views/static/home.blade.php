<x-layouts.app :title="__('Home')">

    <div class="flex items-center justify-center w-full
            transition-opacity opacity-100 duration-750
            lg:grow starting:opacity-0">

        <main class="w-full max-w-[335px] lg:max-w-4xl
                     flex flex-col-reverse lg:flex-row
                     gap-4">

            <section class="flex flex-col gap-2
                            text-sm leading-6 flex-1 p-6 pb-12 lg:p-20
                            bg-gray-100 text-gray-600
                            dark:bg-gray-900 dark:text-gray-400
                            inset-ring inset-ring-gray-500/50
                            rounded-lg">
                <h1 class="text-xl mb-1 font-medium text-gray-900 dark:text-gray-200">
                    About the Application
                </h1>
                <p class="mb-2 ">
                    This front page must show an inviting screen to advertise and promote the
                    application.
                </p>
                <p>
                    Include items that tell the user about the application, what it does, what
                    it does better than others.
                </p>
            </section>

            <section class="text-sm leading-6 flex-1 p-6 pb-12 lg:p-20
                        text-gray-700 dark:text-gray-300
                        bg-gray-100 dark:bg-gray-900
                        inset-ring inset-ring-gray-500/50
                        rounded-lg ">
                <h1 class="text-xl mb-1 font-medium dark:text-gray-200">
                    Let&apos;s get started
                </h1>
                <p class="mb-2 ">
                    Laravel has an incredibly rich ecosystem.
                <br>
                    We suggest starting with the following...
                </p>

                <ul class="flex flex-col mb-4 lg:mb-6">
                    <li class="flex items-center gap-4 py-2">
                        <a href="https://laravel.com/docs" target="_blank"
                           class="inline-flex items-center space-x-1
                                  font-medium underline underline-offset-4
                                  hover:text-gray-800 text-gray-600
                                  hover:dark:text-gray-200 dark:text-gray-400">
                            <x-phosphor-book-bold class="text-gray-600 dark:text-gray-400 w-4
                            h-4 mr-4"/>
                            Read the Documentation
                            <x-phosphor-arrow-up-right class="text-gray-600 dark:text-gray-400
                             w-3
                            h-3 ml-1"/>
                        </a>
                    </li>
                    <li class="flex items-center gap-4 py-2">
                        <a href="https://laracasts.com" target="_blank"
                           class="inline-flex items-center space-x-1
                                  font-medium underline underline-offset-4
                                  hover:text-gray-800 text-gray-600
                                  hover:dark:text-gray-200 dark:text-gray-400">
                            <x-phosphor-video-bold class="text-gray-600 dark:text-gray-400
                            w-4 h-4 mr-4"/>
                            Watch video tutorials at Laracasts
                            <x-phosphor-arrow-up-right
                                class="text-gray-600 dark:text-gray-400  w-3 h-3 ml-1"/>
                        </a>
                    </li>
                    <li class="flex items-center gap-4 py-2">
                        <a href="https://laracasts.com" target="_blank"
                           class="inline-flex items-center space-x-1
                                  font-medium underline underline-offset-4
                                  hover:text-gray-800 text-gray-600
                                  hover:dark:text-gray-200 dark:text-gray-400">
                            <x-phosphor-brain-bold
                                class="text-gray-600 dark:text-gray-400 w-4 h-4 mr-4"/>
                            Practice coding without using AI
                            <x-phosphor-arrow-up-right
                                class="text-gray-600 dark:text-gray-400 w-3 h-3 ml-1"/>
                        </a>
                    </li>
                </ul>

            </section>
        </main>
    </div>

</x-layouts.app>
