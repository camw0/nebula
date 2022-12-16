import Http from '@/Api/Http'

export const getProducts = () => {
  return new Promise((resolve, reject) => {
    Http.get('/products', {
      transformResponse: res => res
    })
      .then(({ data }) => resolve(data))
      .catch(reject)
  })
}
