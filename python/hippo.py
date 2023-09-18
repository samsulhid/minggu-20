def tambahHippo():
  hippos = 0
  answer = 'y'
  while answer =='y':
    hippos = hippos + 1
    print("ada {} Hippo".format(hippos))
    answer = input("Tambah Hippo? (y/n)")

tambahHippo()