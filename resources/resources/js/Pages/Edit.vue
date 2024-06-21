<script setup>
import { Head, useForm } from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue'; // Utilisation d'un composant fictif pour l'exemple

const { faq } = usePage().props;

const form = useForm({
    question: faq.question,
    answer: faq.answer
});

const submitForm = () => {
    form.put(route('faqs.update', faq.id));
};
</script>

<template>
    <Head title="Modifier la FAQ" />

    <AuthenticationCard>
        <template #logo>
            <!-- Logo à insérer si nécessaire -->
        </template>

        <form @submit.prevent="submitForm">
            <div>
                <InputLabel for="question" value="Question" />
                <TextInput v-model="form.question" id="question" type="text" class="mt-1 block w-full" required />
                <InputError class="mt-2" :message="form.errors.question" />
            </div>

            <div class="mt-4">
                <InputLabel for="answer" value="Réponse" />
                <TextInput v-model="form.answer" id="answer" type="text" class="mt-1 block w-full" required />
                <InputError class="mt-2" :message="form.errors.answer" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <PrimaryButton type="submit" class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Enregistrer les modifications
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>
