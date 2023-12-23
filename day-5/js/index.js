/**
 * @param {number[]} nums
 * @param {Function} fn
 * @param {number} init
 * @return {number}
 */
var reduce = function(nums, fn, init) {
    if(nums.length < 1) {
        return init;
    }
    let total =init;
    for(i=0; i<nums.length; i++) {
        total = fn(total, nums[i]);
    }
    return total;

};
