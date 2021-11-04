<x-app-layout>
    <div class="flex space-x-6 filters">
        {{-- TODO: create blade for select --}}
        <div class="w-1/3">
            <select name="category" id="category" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="relative w-2/3">
            <input type="search" placeholder="Find an idea"
                class="w-full px-4 py-2 pl-8 placeholder-gray-900 bg-white border-none rounded-xl">
            <div class="absolute top-0 flex h-full ml-2 itmes-center">
                {{-- TODO: MOVE SVG TO ITS BLADE COMPONENT --}}
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
    <!------------ End filters ------------>



    <div class="my-6 ideas-container space-y-7">
        <div class="flex bg-white cursor-pointer idea-container rounded-xl hover:shadow-card">
            <div class="px-5 py-8 border-r border-gray-100">
                <div class="text-center">
                    <div class="text-2xl font-semibold">15</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 hover:border-gray-400 text-xxs rounded-xl">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://i.pravatar.cc/60?u=98" alt="user avatar" width="60" height="60" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero accusamus eos provident rerum,
                        quidem sed tempora beatae reprehenderit! Omnis officia corrupti iste, sequi adipisci odio harum
                        voluptates quam veniam dolorum. Incidunt veritatis temporibus cumque architecto autem
                        praesentium doloremque quisquam. Porro illum aperiam magni! Non ex doloremque, quaerat, minima
                        quia tempore sint sequi repudiandae quod ducimus beatae perferendis officiis sit similique
                        pariatur fugit iusto rerum saepe excepturi numquam soluta. Sit error quidem et a nobis saepe
                        expedita quasi cumque, quaerat officia nihil adipisci voluptas accusantium libero, tempore
                        architecto ipsam quas labore ducimus totam numquam, autem culpa. Provident nihil consequatur
                        explicabo fugit!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="px-4 py-2 font-bold leading-none text-center uppercase bg-gray-200 rounded-full text-xxs w-28 h-7">
                                Open</div>
                            <button
                                class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 rounded-full hover:bg-gray-200 h-7">
                                {{-- TODO: MOVE SVG TO ITS BLADE COMPONENT --}}
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul
                                    class="absolute py-3 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                    <li><a href="#"
                                            class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Mark
                                            as Spam</a></li>
                                    <li><a href="#"
                                            class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------ End idea-container ------------>
    </div>
    <!------------ End ideas-container ------------>
</x-app-layout>
