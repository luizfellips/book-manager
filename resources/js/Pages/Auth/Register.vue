<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Register" />

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput id="name" type="text" class="RegisterInput" v-model="form.name" required autofocus
                    autocomplete="name" />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput id="email" type="email" class="RegisterInput" v-model="form.email" required
                    autocomplete="username" />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput id="password" type="password" class="RegisterInput" v-model="form.password" required
                    autocomplete="new-password" />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput id="password_confirmation" type="password" class="RegisterInput"
                    v-model="form.password_confirmation" required autocomplete="new-password" />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="AlreadyRegistered">
                <Link :href="route('login')"
                    class="Label">
                Already registered?
                </Link>

                <PrimaryButton class="RegisterButton" :class="{ 'isProcessing': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>

<style>
.RegisterInput {
    margin-top: 0.25rem;
    display: block;
    width: 100%;
}

.RegisterButton {
    margin-left: 1rem;
    /* Assuming 1rem equals 16px */
}

.isProcessing {
    opacity: 0.25;
}

.RegisterStatus {
    margin-bottom: 1rem;
    font-weight: 500;
    font-size: 0.875rem;
    color: #38a169;
}

.RememberMe {
    display: block;
    margin-top: 1rem;

    .Label {
        margin-left: 0.5rem;
        font-size: 0.875rem;
        color: #4a5568;
    }
}

.flex-items-center {
    display: flex;
    align-items: center;
}

.justify-end.mt-4 {
    justify-content: end;
    margin-top: 1rem;
}

.mt-2 {
    margin-top: 1rem;
}

.AlreadyRegistered {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    margin-top: 1rem;
    /* Assuming 1rem equals 16px */

    .Label {
        text-decoration: underline;
        font-size: 0.875rem;
        color: #4a5568;
        transition: color 0.15s ease-in-out;
        border-radius: 0.375rem;
        outline: none;
    }

    .Label:hover {
        color: #1a202c;
    }

    .Label:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(66, 153, 225, 0.5);
    }
}
</style>
