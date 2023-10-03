<script setup>
import moment from 'moment';
import AppLayout from "@/Layouts/AppLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import { Link, router } from '@inertiajs/vue3';

defineProps({
    movies: Object,
});

function remove(id) {
   router.delete(route('movies.destroy', { id: id}));
}
</script>

<template>
    <AppLayout title="Daisy UI">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Movie
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mb-4">
                        <Link :href="route('movies.create')" class="btn btn-outline btn-success">
                            Create
                        </Link>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="table table-md">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Summary</th>
                                    <th>Release Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="movie in movies.data" :key="movie.id">
                                    <th>{{ movie.id }}</th>
                                    <td>{{ movie.title }}</td>
                                    <td>{{ movie.summary }}</td>
                                    <td>{{ moment(movie.release_at).format('MMMM Do YYYY') }}</td>
                                    <td>
                                        <div class="btn-group btn-group-horizontal">
                                            <Link :href="route('movies.show', { id: movie.id })" class="btn btn-sm btn-outline btn-warning">Edit</Link>
                                            <Button @click="remove(movie.id)" class="btn btn-sm btn-outline btn-error">Delete</Button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <Pagination :links="movies.links" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
