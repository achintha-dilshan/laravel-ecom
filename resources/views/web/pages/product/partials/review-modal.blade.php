<div id="add-review-modal"
     tabindex="-1"
     aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full p-4">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5">
                <h3 class="text-xl font-semibold text-gray-600">
                    Write a review
                </h3>
                <button type="button"
                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto"
                        data-modal-hide="add-review-modal">
                    <svg class="w-3 h-3"
                         aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-6">
                    <!-- Rating -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-600">Rate this product</label>
                        <div class="flex flex-row-reverse items-center justify-end">
                            <input id="rating-1"
                                   type="radio"
                                   class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-5 size-5 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                   name="rating"
                                   value="1">
                            <label for="rating-1"
                                   class="text-gray-200 pointer-events-none peer-checked:text-amber-400">
                                <svg class="shrink-0 size-5"
                                     xmlns="http://www.w3.org/2000/svg"
                                     width="16"
                                     height="16"
                                     fill="currentColor"
                                     viewBox="0 0 16 16">
                                    <path
                                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                            <input id="rating-2"
                                   type="radio"
                                   class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-5 size-5 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                   name="rating"
                                   value="2">
                            <label for="rating-2"
                                   class="text-gray-200 pointer-events-none peer-checked:text-amber-400">
                                <svg class="shrink-0 size-5"
                                     xmlns="http://www.w3.org/2000/svg"
                                     width="16"
                                     height="16"
                                     fill="currentColor"
                                     viewBox="0 0 16 16">
                                    <path
                                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                            <input id="rating-3"
                                   type="radio"
                                   class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-5 size-5 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                   name="rating"
                                   value="3">
                            <label for="rating-3"
                                   class="text-gray-200 pointer-events-none peer-checked:text-amber-400">
                                <svg class="shrink-0 size-5"
                                     xmlns="http://www.w3.org/2000/svg"
                                     width="16"
                                     height="16"
                                     fill="currentColor"
                                     viewBox="0 0 16 16">
                                    <path
                                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                            <input id="rating-4"
                                   type="radio"
                                   class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-5 size-5 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                   name="rating"
                                   value="4">
                            <label for="rating-4"
                                   class="text-gray-200 pointer-events-none peer-checked:text-amber-400">
                                <svg class="shrink-0 size-5"
                                     xmlns="http://www.w3.org/2000/svg"
                                     width="16"
                                     height="16"
                                     fill="currentColor"
                                     viewBox="0 0 16 16">
                                    <path
                                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                            <input id="rating-5"
                                   type="radio"
                                   class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-5 size-5 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                   name="rating"
                                   value="5">
                            <label for="rating-5"
                                   class="text-gray-200 pointer-events-none peer-checked:text-amber-400">
                                <svg class="shrink-0 size-5"
                                     xmlns="http://www.w3.org/2000/svg"
                                     width="16"
                                     height="16"
                                     fill="currentColor"
                                     viewBox="0 0 16 16">
                                    <path
                                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                        </div>
                    </div>
                    <!-- End Rating -->

                    {{-- review --}}
                    <div>
                        <label for="review"
                               class="block mb-2 text-sm font-medium text-gray-600">Tell us what you think</label>
                        <textarea id="review"
                                  rows="4"
                                  class="block p-2.5 w-full text-sm text-gray-600 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                                  placeholder="Write your review here..."></textarea>
                    </div>

                    {{-- images --}}
                    <div>
                        <label for="images"
                               class="block mb-2 text-sm font-medium text-gray-600">Upload photos
                            (optional)</label>
                        <input id="images"
                               type="file"
                               multiple>
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center gap-2 p-4 border-t border-gray-200 rounded-b md:p-5">
                <x-button type="submit"
                          data-modal-hide="add-review-modal">Submit</x-button>
                <x-button type="button"
                          variant="secondary"
                          data-modal-hide="add-review-modal">Cancel</x-button>
            </div>
        </div>
    </div>
</div>
