<div>
    <div class="bg-white">
        <div class="mx-auto grid max-w-3xl grid-cols-1 gap-x-8 gap-y-16 px-4 py-16 sm:grid-cols-2 sm:px-6 xl:max-w-none xl:grid-cols-3 xl:px-8 2xl:grid-cols-4">

            ///https://www.geeksforgeeks.org/return-all-dates-between-two-dates-in-an-array-in-php/
            @for($i = 0 ; $i < 12 ;$i++)
                <section class="text-center">
                    <h2 class="text-sm font-semibold text-gray-900">January</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>M</div>
                        <div>T</div>
                        <div>W</div>
                        <div>T</div>
                        <div>F</div>
                        <div>S</div>
                        <div>S</div>
                    </div>
                    <div class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200">
                        <!--
                          Always include: "py-1.5 hover:bg-gray-100 focus:z-10"
                          Is current month, include: "bg-white text-gray-900"
                          Is not current month, include: "bg-gray-50 text-gray-400"

                          Top left day, include: "rounded-tl-lg"
                          Top right day, include: "rounded-tr-lg"
                          Bottom left day, include: "rounded-bl-lg"
                          Bottom right day, include: "rounded-br-lg"
                        -->
                        <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <!--
                              Always include: "mx-auto flex h-7 w-7 items-center justify-center rounded-full"
                              Is today, include: "bg-indigo-600 font-semibold text-white"
                            -->
                            <time datetime="2021-12-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                    </div>
                </section>
            @endfor


            <!-- More items... -->
        </div>
    </div>
</div>
