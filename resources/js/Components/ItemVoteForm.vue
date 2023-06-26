<script setup lang="ts">
import {useForm} from "@inertiajs/vue3";
import {Item} from "@/types";
import InputError from "@/Components/InputError.vue";

defineProps<{
    items: Item[]
}>()

const form = useForm({
    item_id: null,
})

const submit = () => {
    form.post(route('vote.store'), {
        preserveScroll: true,
    })
}
</script>

<template>
    <form @submit.prevent="submit" class="mt-6 space-y-6">
        <div>
            <label for="item_id" class="block text-sm font-medium text-gray-700">
                Item
            </label>

            <select id="item_id" name="item_id" v-model="form.item_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option v-for="item in items" :key="item.id" :value="item.id">
                    {{ item.name }}
                </option>
            </select>

            <InputError :message="form.errors.item_id" class="mt-2" />
        </div>

        <div>
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Vote
            </button>
            <Transition
                enter-active-class="transition ease-in-out"
                enter-from-class="opacity-0"
                leave-active-class="transition ease-in-out"
                leave-to-class="opacity-0"
            >
                <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
            </Transition>
        </div>
    </form>
</template>
