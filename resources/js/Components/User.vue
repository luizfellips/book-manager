
<template>
    <div class="User">
        <div class="Data">
            <h2>{{ user.name }}</h2>
            <p>Permission Level: {{ user.is_admin ? 'Admin' : 'User' }}</p>
            <p>Email: {{ user.email }}</p>
            <div class="Actions">
                <Link :href="route('admin.users.edit', {user: user.id})">
                <PrimaryButton class="PermissionButton">Update Permission</PrimaryButton>
                </Link>
                <Link :href="route('admin.users.delete.confirm', {user: user.id})">
                <PrimaryButton class="DeleteButton">Delete User</PrimaryButton>
                </Link>
            </div>
        </div>
        <div class="Image">
            <img src="../../../public/img/placeholder.png" alt="">

        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import PrimaryButton from './PrimaryButton.vue';
const props = defineProps(['user']);
</script>


<style scoped>
.User {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    color: white;
    cursor: pointer;
    text-decoration: none;

    display: flex;
    justify-content: space-between;

    .Image {
        img {
            width: 200px;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
    }

    h2 {
        font-size: 2em;
    }
}

.Actions {
    display: flex;
    flex-direction: column;
    gap: 7px;

    .PermissionButton {
        background: #00c267;;
    }

    .PermissionButton:hover {
        background: #019751;
    }

    .DeleteButton {
        background: #c94040;
    }

    .DeleteButton:hover {
        background: #9e3434;
    }

}
</style>
