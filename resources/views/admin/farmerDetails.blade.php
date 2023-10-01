<x-app>
    <x-slot:title>
        Admin | Farmer-Details
    </x-slot:title>

    <x-admin.sidebar type="managed farmers"/>
    <div class="h-full w-full">
        <div class="grid w-full h-full px-5 bg-green-700">
            <div class="my-3 px-5 text-white flex justify-between w-full gap-4">
                <x-admin.goBack/>
                <div class="flex items-center justify-center gap-3">
                    <div class="relative">
                        <img src="{{asset('images/farmer-3.png')}}" class="max-w-[46px] max-h-[46px] rounded-full bg-gray-300 border border" alt="">
                        <img onclick="toggleDropDown()" src="{{asset('images/icons/update.png')}}" class="h-[20px] h-[20px] absolute bg-white rounded-full border bottom-0 right-0 cursor-pointer hover:bg-green-200" alt="">
                        <div  id="dropdownTarget" class="nav">
                            <ul class="w-[150px]">
                                <li class="flex items-center justify-center gap-2 py-1 hover:bg-slate-200">
                                    <img src="{{asset('images/icons/delete.png')}}" class="h-[20px] w-[20px]" alt="">
                                    <p class="text-center text-slate-700 my-1 font-semibold cursor-pointer">DELETE</p>
                                </li>
                                <li class="flex items-center justify-center gap-2 py-1 hover:bg-slate-200">
                                    <img src="{{asset('images/icons/edit.png')}}" class="h-[15px] w-[15px]" alt="">
                                    <p class="text-center text-slate-700 my-1 font-semibold cursor-pointer">UPDATE</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h2 class="font-bold text-2xl">John Doe</h2>
                        <div class="flex gap-2 items-center">
                            <p class=" font-semibold">RSBSA No.</p>
                            <p class="text-sm">9812619</p>
                        </div>
                    </div>
                </div>
            </div>
            

            
            <div class="w-full grid grid-cols-4 py-1">
                <a href="/admin/farmers/details/personal" class="{{$currentRoute == 'personal' ?  'mx-auto px-2 py-1 rounded text-white cursor-pointer  bg-green-600' : 'mx-auto px-2 py-1 rounded text-white hover:bg-green-600  cursor-pointer' }}">Area Information</a>
                <a href="/admin/farmers/details/live-stack" class="{{$currentRoute == 'live-stack' ?  'mx-auto px-2 py-1 rounded text-white bg-green-600 cursor-pointer' : 'mx-auto px-2 py-1 rounded text-white hover:bg-green-600  cursor-pointer' }}">Livestock Information</a>
                <a href="/admin/farmers/details/poultry" class="{{$currentRoute == 'poultry' ?  'mx-auto px-2 py-1 rounded text-white bg-green-600 cursor-pointer' : 'mx-auto px-2 py-1 rounded text-white hover:bg-green-600  cursor-pointer' }}">Poultry Information</a>
                <a href="/admin/farmers/details/machinary" class="{{$currentRoute == 'machinary' ?  'mx-auto px-2 py-1 rounded text-white bg-green-600 cursor-pointer' : 'mx-auto px-2 py-1 rounded text-white hover:bg-green-600  cursor-pointer' }}">Machinary Information</a>
            </div>
        </div>





        {{-- personal information  --}}

        <div class="{{$currentRoute == 'personal' ? 'flex flex-col w-full h-full p-5' : 'hidden'}}">
            <table class="flex flex-col overflow-x-auto min-w-[800px] md:max-w-full shadow-md border border-2 rounded">
                <tr class="grid grid-cols-1 py-2 bg-green-700 text-white w-full">
                    <th class="w-full px-3 relative flex md:justify-end justify-center items-center py-2">
                        <input class="md:w-1/2 px-3 py-1 bg-slate-100 rounded outline-0 text-ms text-slate-800 w-[90%]" placeholder="Search..." type="text">
                    </th>
                    <th class="grid grid-cols-10 text-[12px] mt-5">
                        <div>Area</div>
                        <div>Lot number</div>
                        <div>Hectare</div>
                        <div>Address</div>
                        <div>Geotag</div>
                        <div>Farm type</div>
                        <div>Ownership</div>
                        <div>Name of Owner if rented</div>
                        <div>Owner Address</div>
                        <div>Operation</div>
                    </th>
                </tr>
                @foreach ([1,2,3,4] as $item)
                    
                <tr class="grid py-1 odd:bg-slate-200 grid-cols-10 w-full">
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="grid grid-cols-2 gap-2">
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/update.png')}}" alt=""></div>
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/delete.png')}}" alt=""></div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>


        {{-- live stack information  --}}

        <div class="{{$currentRoute == 'live-stack' ? 'flex flex-col w-full h-full p-5' : 'hidden'}}">
            <table class="flex flex-col overflow-x-auto min-w-[800px] md:max-w-full shadow-md border border-2 rounded">
                <tr class="grid grid-cols-1 py-2 bg-green-700 text-white w-full">
                    <th class="w-full px-3 relative flex md:justify-end justify-center items-center py-2">
                        <input class="md:w-1/2 px-3 py-1 bg-slate-100 rounded outline-0 text-ms text-slate-800 w-[90%]" placeholder="Search..." type="text">
                    </th>
                    <th class="grid grid-cols-5 text-[12px] mt-5">
                        <div>Animal Name</div>
                        <div>Gender</div>
                        <div>Quality</div>
                        <div>Address</div>
                        <div>Operation</div>
                    </th>
                </tr>
                @foreach ([1,2,3,4] as $item)
                    
                <tr class="grid py-1 odd:bg-slate-200 grid-cols-5 w-full">
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="grid grid-cols-2 gap-2">
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/update.png')}}" alt=""></div>
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/delete.png')}}" alt=""></div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>


        {{-- Pultry Inforamtion --}}

        <div class="{{$currentRoute == 'poultry' ? 'flex flex-col w-full h-full p-5' : 'hidden'}}">
            <table class="flex flex-col overflow-x-auto min-w-[800px] md:max-w-full shadow-md border border-2 rounded">
                <tr class="grid grid-cols-1 py-2 bg-green-700 text-white w-full">
                    <th class="w-full px-3 relative flex md:justify-end justify-center items-center py-2">
                        <input class="md:w-1/2 px-3 py-1 bg-slate-100 rounded outline-0 text-ms text-slate-800 w-[90%]" placeholder="Search..." type="text">
                    </th>
                    <th class="grid grid-cols-3 text-[12px] mt-5">
                        <div>Animal Name</div>
                        <div>Quality</div>
                        <div>Operation</div>
                    </th>
                </tr>
                @foreach ([1,2,3,4] as $item)
                    
                <tr class="grid py-1 odd:bg-slate-200 grid-cols-3 w-full">
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="flex items-center justify-around">
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/update.png')}}" alt=""></div>
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/delete.png')}}" alt=""></div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        {{-- machinary information  --}}

        <div class="{{$currentRoute == 'machinary' ? 'flex flex-col w-full h-full p-5' : 'hidden'}}">
            <table class="flex flex-col overflow-x-auto min-w-[800px] md:max-w-full shadow-md border border-2 rounded">
                <tr class="grid grid-cols-1 py-2 bg-green-700 text-white w-full">
                    <th class="w-full px-3 relative flex md:justify-end justify-center items-center py-2">
                        <input class="md:w-1/2 px-3 py-1 bg-slate-100 rounded outline-0 text-ms text-slate-800 w-[90%]" placeholder="Search..." type="text">
                    </th>
                    <th class="grid grid-cols-5 text-[12px] mt-5">
                        <div>Machine Name</div>
                        <div>Purchased</div>
                        <div>Grant</div>
                        <div>Use of Machinary</div>
                        <div>Operation</div>
                    </th>
                </tr>
                @foreach ([1,2,3,4] as $item)
                    
                <tr class="grid py-1 odd:bg-slate-200 grid-cols-5 w-full">
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="grid grid-cols-2 gap-2">
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/update.png')}}" alt=""></div>
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/delete.png')}}" alt=""></div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
</x-app>

<script>
    const dropDownTarget = document.getElementById("dropdownTarget")

    const toggleDropDown = ()=>{
        if(dropDownTarget){
            dropDownTarget.classList.toggle("navShow");
        }
    }
</script>

