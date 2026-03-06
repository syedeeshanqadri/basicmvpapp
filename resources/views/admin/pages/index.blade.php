<h1>Pages</h1>

@foreach($pages as $page)

<div>
    <h3>{{ $page->title }}</h3>

    <a href="/admin/pages/{{ $page->id }}/edit">
        Edit
    </a>
</div>


@endforeach

</br></br></br>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <a href="/dashboard"> Go Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>