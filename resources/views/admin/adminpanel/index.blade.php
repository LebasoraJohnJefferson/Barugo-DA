<x-app>
    <x-slot:title>
        Admin | Admin Control Panel
    </x-slot:title>

    <x-admin.sidebar type="Admin Panel"/>

    <section class="w-full h-full">
        <header class="bg-[#679f69] px-3 sm:px-6 py-2 sm:py-6">
            <div class="w-[min(400px,100%)] text-center">
                <h2 class="font-bold text-3xl sm:text-4xl text-white">Administration Control Panel</h2>
            </div>
        </header>
        <nav class="flex justify-start items-center p-3 sm:p-4 shadow-xl">
            <ul class="flex flex-row items-center justify-center gap-x-2 sm:gap-x-4">
                <li><a class=" underline font-semibold text-[#72c4ff]" href="">Survey Questions</a></li>
                <li><a class=" underline font-semibold" href="">Seed Distribution</a></li>
                <li><a class=" underline font-semibold" href="">Employee Control</a></li>
            </ul>
        </nav>

        <section>
            <table class="w-[700px] sm:w-full flex flex-col shadow-md rounded">
                <tr class="grid grid-cols-1 py-2 bg-green-700 text-white w-full">
                    <th class="w-full px-3 grid grid-cols-1 relative  py-2">
                        <div data-show-form class="flex items-center gap-3 cursor-pointer">
                            <img src="{{asset('images/icons/plus.png')}}" class="hover:bg-green-200 w-[25px] h-[25px] border bg-slate-100 rounded-full p-1" alt=""> Add New Religion
                        </div>
                    </th>
                    <th class="grid grid-cols-2 text-[12px] mt-5">
                        <div>Option Name</div>
                        <div>Operation</div>
                    </th>
                </tr>
                <tr class="grid py-1 grid-cols-2 w-full">

                    @foreach ($religions as $religion)
                        <td class="text-center">{{$religion->religion}}</td>
                        <td class="flex items-center justify-center">
                            {{-- <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/update.png')}}" alt=""></div> --}}
                            <form action="{{route('adminControlPanel.destroy', ['religion' => $religion])}}" method="post">
                                @csrf
                                @method('delete')

                                <button type="submit">
                                    <img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/delete.png')}}" alt="delete button">
                                </button>
                            </form>
                        </td>
                    @endforeach
                    
                </tr>
            </table>
        </section>
    </section>

</x-app>

<div id="religionSurveyForm" class="hidden" >
    
    <div class="h-screen w-screen bg-gray-500/50 fixed top-0 left-0 z-2 flex items-center justify-center">
        <form method="POST" action="{{route('adminControlPanel.store')}}" class="p-3 w-full gap-2 text-gray-700 grid md:w-2/4 rounded shadow-md bg-white">
            @csrf
            <div class="text-[20px] font-semibold w-full flex items-center justify-between px-3 my-2">
                <p>Add New Religion</p>
                <img data-show-close src="{{asset('images/close.png')}}" class="w-[16px] h-[16px] cursor-pointer" alt="close">
            </div>
            <div class="w-full px-3 flex flex-col gap-1">
                <label for="religion" class="text-[12px] font-semibold">Religion Name</label>
                <input type="text" name="religion" id="religion" placeholder="Enter Religion..." class="w-full border outline-0 px-2 py-1 shadow-md bg-gray-100">
            </div>
            <div class="px-3">
                <button type="submit" class="py-2 w-full mt-3 text-white hover:bg-green-500 rounded font-bold bg-green-700">
                    ADD RELIGION
                </button>
            </div>
        </form>
    </div>
    
</div>




<script>
    const religionSurveyForm = document.getElementById('religionSurveyForm');
    const btnShowClose = document.querySelector('[data-show-close]');
    const btnShowForm = document.querySelector('[data-show-form]');

    btnShowForm.addEventListener('click', () => {
        religionSurveyForm.classList.toggle('hidden');
    });

    btnShowClose.addEventListener('click', () => {
        religionSurveyForm.classList.add('hidden');
    });
    
</script>