<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <AppLayout title="Daisy UI">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Daisy UI
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                        <div class="alert alert-info my-5">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                class="stroke-current shrink-0 w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                ></path>
                            </svg>
                            <span>New software update available.</span>
                        </div>

                        <div class="alert alert-success my-5">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="stroke-current shrink-0 h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                            <span>Your purchase has been confirmed!</span>
                        </div>

                        <div class="alert alert-warning my-5">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="stroke-current shrink-0 h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
                                />
                            </svg>
                            <span>Warning: Invalid email address!</span>
                        </div>

                        <div class="alert alert-error my-5">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="stroke-current shrink-0 h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                            <span>Error! Task failed successfully.</span>
                        </div>

                        <div class="alert">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                class="stroke-info shrink-0 w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                ></path>
                            </svg>
                            <span>we use cookies for no reason.</span>
                            <div>
                                <button class="btn btn-sm">Deny</button>
                                <button class="btn btn-sm btn-primary">
                                    Accept
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                        <div class="avatar my-5">
                            <div class="w-24 rounded">
                                <img
                                    src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg"
                                />
                            </div>
                        </div>
                        <div class="avatar my-5">
                            <div class="w-32 rounded">
                                <img
                                    src="/images/stock/photo-1534528741775-53994a69daeb.jpg"
                                />
                            </div>
                        </div>
                        <div class="avatar">
                            <div class="w-20 rounded">
                                <img
                                    src="/images/stock/photo-1534528741775-53994a69daeb.jpg"
                                    alt="Tailwind-CSS-Avatar-component"
                                />
                            </div>
                        </div>
                        <div class="avatar">
                            <div class="w-16 rounded">
                                <img
                                    src="/images/stock/photo-1534528741775-53994a69daeb.jpg"
                                    alt="Tailwind-CSS-Avatar-component"
                                />
                            </div>
                        </div>
                        <div class="avatar">
                            <div class="w-8 rounded">
                                <img
                                    src="/images/stock/photo-1534528741775-53994a69daeb.jpg"
                                    alt="Tailwind-CSS-Avatar-component"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="collapse bg-base-200">
                        <input type="checkbox" />
                        <div class="collapse-title text-xl font-medium">
                            Click me to show/hide content
                        </div>
                        <div class="collapse-content">
                            <p>hello</p>
                        </div>
                    </div>

                    <!-- Open the modal using ID.showModal() method -->
                    <button class="btn" onclick="my_modal_2.showModal()">
                        open modal
                    </button>
                    <dialog id="my_modal_2" class="modal">
                        <div class="modal-box">
                            <h3 class="font-bold text-lg">Hello!</h3>
                            <p class="py-4">
                                Press ESC key or click outside to close
                            </p>
                        </div>
                        <form method="dialog" class="modal-backdrop">
                            <button>close</button>
                        </form>
                    </dialog>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
