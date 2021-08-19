@props(['social'])

@if($social == 'facebook')
    <a {{ $attributes->merge(['class' => 'flex items-center justify-center h-12 w-12 px-4 py-2 space-x-2 transition-colors duration-300 border border-blue-600 rounded-md group hover:bg-blue-600 focus:outline-none']) }}>
        <span>
        <svg class="w-5 h-5 text-blue-600 fill-current group-hover:text-white" viewBox="0 0 16 16"
             aria-hidden="true"><path fill-rule="evenodd"
                                      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>
        </span>
    </a>
@elseif($social == 'twitter')
    <a {{ $attributes->merge(['class' => 'flex items-center justify-center h-12 w-12 px-4 py-2 space-x-2 transition-colors duration-300 border border-blue-400 rounded-md group hover:bg-blue-400 focus:outline-none']) }}>
        <span>
        <svg class="w-5 h-5 text-blue-400 fill-current group-hover:text-white" viewBox="0 0 16 16"
             aria-hidden="true"><path fill-rule="evenodd"
                                      d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0016 3.542a6.658 6.658 0 01-1.889.518 3.301 3.301 0 001.447-1.817 6.533 6.533 0 01-2.087.793A3.286 3.286 0 007.875 6.03a9.325 9.325 0 01-6.767-3.429 3.289 3.289 0 001.018 4.382A3.323 3.323 0 01.64 6.575v.045a3.288 3.288 0 002.632 3.218 3.203 3.203 0 01-.865.115 3.23 3.23 0 01-.614-.057 3.283 3.283 0 003.067 2.277A6.588 6.588 0 01.78 13.58a6.32 6.32 0 01-.78-.045A9.344 9.344 0 005.026 15z"/></svg>
        </span>
    </a>
@elseif($social == 'linkedin')
    <a {{ $attributes->merge(['class' => 'flex items-center justify-center h-12 w-12 px-4 py-2 space-x-2 transition-colors duration-300 border border-blue-500 rounded-md group hover:bg-blue-500 focus:outline-none']) }}>
        <span>
        <svg class="w-5 h-5 text-blue-500 fill-current group-hover:text-white" viewBox="0 0 16 16"
             aria-hidden="true"><path fill-rule="evenodd"
                                      d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 01.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/></svg>
        </span>
    </a>
@elseif($social == 'google')
    <a {{ $attributes->merge(['class' => 'flex items-center justify-center h-12 w-12 px-4 py-2 space-x-2 transition-colors duration-300 border border-red-500 rounded-md group hover:bg-red-500 focus:outline-none']) }}>
        <span>
        <svg class="w-5 h-5 text-red-500 fill-current group-hover:text-white" viewBox="0 0 16 16"
             aria-hidden="true"><path fill-rule="evenodd"
                                      d="M15.545 6.558a9.42 9.42 0 01.139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 118 0a7.689 7.689 0 015.352 2.082l-2.284 2.284A4.347 4.347 0 008 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 000 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 001.599-2.431H8v-3.08h7.545z"/></svg>
        </span>
    </a>
@elseif($social == 'github')
    <a {{ $attributes->merge(['class' => 'flex items-center justify-center h-12 w-12 px-4 py-2 space-x-2 transition-colors duration-300 border border-gray-800 rounded-md group hover:bg-gray-800 focus:outline-none']) }}>
        <span>
        <svg class="w-5 h-5 text-gray-800 fill-current group-hover:text-white" viewBox="0 0 16 16"
             aria-hidden="true"><path fill-rule="evenodd"
                                      d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
        </span>
    </a>
@elseif($social == 'gitlab')
    <a {{ $attributes->merge(['class' => 'flex items-center justify-center h-12 w-12 px-4 py-2 space-x-2 transition-colors duration-300 border border-yellow-500 rounded-md group hover:bg-yellow-500 focus:outline-none']) }}>
        <span>
        <svg class="w-5 h-5 text-yellow-500 fill-current group-hover:text-white" viewBox="0 0 16 16"
             aria-hidden="true"><path fill-rule="evenodd"
                                      d="M13.301.887c-.098-.273-.49-.273-.588 0l-1.764 5.38h4.115L13.301.887zM.957 6.267l-.9 2.708a.613.613 0 00.223.677l7.731 5.664L.957 6.267zm4.115 0L3.309.887c-.098-.273-.49-.273-.588 0L.957 6.267h4.115z"/><path
                d="M5.072 6.267l2.939 9.049 2.938-9.049z"/><path fill-rule="evenodd"
                                                                 d="M15.964 8.975l-.001.001-.899-2.708-7.053 9.048 7.73-5.664a.613.613 0 00.223-.677z"/></svg>
        </span>
    </a>
@elseif($social == 'bitbucket')
    <a {{ $attributes->merge(['class' => 'flex items-center justify-center h-12 w-12 px-4 py-2 space-x-2 transition-colors duration-300 border border-blue-500 rounded-md group hover:bg-blue-500 focus:outline-none']) }}>
        <span>
        <svg class="w-5 h-5 text-blue-500 fill-current group-hover:text-white" viewBox="0 0 16 16"
             aria-hidden="true"><path fill-rule="evenodd"
                                      d="M2.86 15.295h10.42a.516.516 0 00.512-.437l2.173-13.593a.519.519 0 00-.512-.603L.518.655a.516.516 0 00-.512.607l2.173 13.44a.7.7 0 00.681.593zm7.612-9.722l-.806 4.795H6.339l-.9-4.795h5.033z"/></svg>
        </span>
    </a>
@endif
