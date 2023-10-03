<script setup>
import moment from "moment";
import AppLayout from "@/Layouts/AppLayout.vue";
import { useForm, Link, router } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";

const props = defineProps({
    movie: Object,
    fash: Object | null,
});

const form = useForm({
    title: props.movie.title,
    summary: props.movie.summary,
    release_at: moment(props.movie.release_at).format("yyyy-MM-DD"),
});

function submit() {
    form.put(route("movies.update", { id: props.movie.id }), {
        onSuccess: () => {
            modalAlert.showModal();
        },
    });
}

function back() {
    router.visit(route('movies.index'), {
        method: 'get'
    });
}
</script>

<template>
    <AppLayout title="Daisy UI">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Movie
            </h2>
        </template>

        <div class="py-12">
            <dialog
                id="modalAlert"
                class="modal modal-bottom sm:modal-middle"
                v-if="$page.props.flash.success"
            >
                <div class="modal-box">
                    <h3 class="font-bold text-lg">MESSAGE!</h3>
                    <p class="py-4">{{ $page.props.flash.success ?? "" }}</p>
                    <div class="modal-action">
                        <form method="dialog">
                            <button class="btn" @click="back">Close</button>
                        </form>
                    </div>
                </div>
            </dialog>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="submit">
                        <div class="mx-8 my-6">
                            <div class="form-control mb-4">
                                <div class="label" for="title">Title</div>
                                <input
                                    id="title"
                                    v-model="form.title"
                                    type="text"
                                    class="input input-bordered w-full"
                                    :class="
                                        form.errors.title ? 'input-error' : ''
                                    "
                                />
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.title"
                                />
                            </div>
                            <div class="form-control mb-4">
                                <div class="label" for="summary">Summary</div>
                                <textarea
                                    id="summary"
                                    v-model="form.summary"
                                    class="textarea textarea-bordered w-full"
                                    :class="
                                        form.errors.summary
                                            ? 'textarea-error'
                                            : ''
                                    "
                                >
                                </textarea>
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.summary"
                                />
                            </div>
                            <div class="form-control mb-4">
                                <div class="label" for="release_at">
                                    Release Date
                                </div>
                                <input
                                    id="release_at"
                                    type="date"
                                    v-model="form.release_at"
                                    class="textarea textarea-bordered w-full"
                                    :class="
                                        form.errors.release_at
                                            ? 'input-error'
                                            : ''
                                    "
                                />
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.release_at"
                                />
                            </div>

                            <div class="mb-4">
                                <Link
                                    :href="route('movies.index')"
                                    class="btn btn-outline btn-warning mr-2"
                                    >Back</Link
                                >
                                <button class="btn btn-outline btn-success">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
