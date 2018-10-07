<template>
   <div class="mb-8 flex">
        <div class="mr-4">
            <span class="border-2 border-solid border-grey-dark rounded-full w-6 h-6 block tex-grey-dark font-bold flex items-center justify-center cursor-pointer" @click="isOpen = !isOpen" v-html="symbol">
            </span>
        </div>

        <div>
            <h3 v-text="question.question" class="font-bold text-xl mb-3 text-black cursor-pointer" @click="isOpen = !isOpen"></h3>
            <div v-html="question.answer" v-show="isOpen" class="leading-loose"></div>
        </div>
       
   </div>
</template>

<script>
    import octicons from 'octicons';
    export default {
        props: ['question'],
        computed: {
            symbol() {
                if (this.isOpen) {
                    return octicons.x.toSVG({"class": "fill-current"});
                } else {
                     return octicons.plus.toSVG({"class": "fill-current"});
                }
                
            }
        },
        data() {
            return {
               isOpen: false
            }
        }
    }
</script>
