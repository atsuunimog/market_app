<button {{ $attributes->merge(['type' => 'submit', 
'class' => 'items-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-500 focus:shadow-outline focus:outline-none']) }}>
    {{ $slot }}
</button>
