<template>
    <div class="inline-flex items-center pl-auto border-none rounded-md font-semibold text-3xl ">
        <span class="material-icons text-red-600" v-on:click.prevent="toggleFavorite()">{{ isFavorite ? 'favorite' : 'favorite_border' }}</span>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: {
        shopFavoriteFlg: {
            type: [Boolean],
            required: true
        },
        shopFavoriteId: {
            type: [String, Number],
            required: false
        },
        shopId: {
            type: [Number],
            required: true
        },
        userId: {
            type: [Number],
            required: true
        },
    },
    data() {
        return {
            isFavorite: this.shopFavoriteFlg
        };
    },
    methods: {
        toggleFavorite() {
            if (this.isFavorite) {
                this.removeFavorite();0
            } else {
                this.addFavorite();
            }
        },
        addFavorite() {
            // お気に入り登録
            axios
                .post('/api/favorite/store', {
                    user_id: this.userId,
                    shop_id: this.shopId
                })
                .then(() => {
                    this.isFavorite = true;
                    console.log('お気に入り登録に成功しました');
                    console.log(this.userId);
                    console.log(this.shopId);
                    console.log(response.data);
                })
                .catch(() => {
                    console.log('お気に入り登録に失敗しました');
                    console.log(this.userId);
                    console.log(this.shopId);
                });
        },
        removeFavorite() {
            // お気に入り削除
            axios
                .delete('/api/favorite/delete', {
                    data: {
                        id: this.shopFavoriteId,
                    }
                })
                .then(() => {
                    this.isFavorite = false;
                    console.log('お気に入り削除に成功しました');
                    console.log(this.shopFavoriteId);
                })
                .catch(() => {
                    console.log('お気に入り削除に失敗しました');
                    console.log(this.shopFavoriteId);
                });
        }
    }
}
</script>

