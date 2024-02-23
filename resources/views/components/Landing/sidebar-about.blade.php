<div>

    <!-- Sidebar Start -->
    <div class="flex flex-col items-start md:flex-row">
        <ul
            class="flex items-center justify-center w-full py-4 pt-5 pb-5 mb-4 lg:mr-4 overflow-scroll no-scrollbar lg:block lg:w-auto lg:px-4 lg:pt-4 lg:pb-2 lg:rounded-lg border border-black-300 lg:overflow-hidden">
            {{-- <li class="p-3" v-for="(item, index) in sidebarItems" :key="index"
                :class="{
                    'relative h-full lg:w-60 lg:mb-2 md:items-center md:text-center bg-blue-5 rounded-md text-primary-shineblue font-bold p-2 border-l-0 lg:border-l-4 border-b-4 lg:border-b-0 border-primary-shineblue active - link': isActiveLink(
                        item.link)
                }">
                <NuxtLink :to="item.link">
                    {{ item . label }}
                </NuxtLink>
            </li> --}}

            <li
                class="p-3 relative h-full lg:w-60 lg:mb-2 md:items-center md:text-center bg-blue-5 rounded-md text-primary-shineblue font-bold p-2 border-l-0 lg:border-l-4 border-b-4 lg:border-b-0 border-primary-shineblue">
                About Us
            </li>
            <li class="p-3">
                Bantuan
            </li>
            <li class="p-3">
                Contact Us
            </li>
        </ul>
    </div>

</div>


<script setup lang="ts">
    import {
        ref,
        onMounted,
        onBeforeUnmount
    } from 'vue';

    const isSmallScreen = ref(false);
    const activeLink = ref(null);

    const sidebarItems = [{
            label: 'Tentang Sea Education',
            link: '/help/about-us'
        },
        {
            label: 'Bantuan',
            link: '/help/support'
        },
        // {
        //   label: 'Syarat dan Ketentuan',
        //   link: '/help/terms-condition'
        // },
        // {
        //   label: 'Kebijakan Privasi',
        //   link: '/help/privacy-policy'
        // },
        {
            label: 'Hubungi Kami',
            link: '/help/location'
        },
    ]

    const route = useRoute();


    const isActiveLink = (link: string) => {
        return route.path === link;
    };
    onMounted(() => {
        if (window.innerWidth < 768) {
            isSmallScreen.value = true;
        }

        window.addEventListener('resize', () => {
            isSmallScreen.value = window.innerWidth < 768;
        });
    });

    onBeforeUnmount(() => {
        window.removeEventListener('resize', () => {
            isSmallScreen.value = window.innerWidth < 768;
        });
    });
</script>
