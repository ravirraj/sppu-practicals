def dfs(graph, node, visited): 
    visited.add(node) 
    print(node, end=' ') 
    for neighbour in graph[node]: 
        if neighbour not in visited: 
            dfs(graph, neighbour, visited) 

def bfs(graph, start): 
    visited = set([start]) 
    queue = [start] 

    while queue: 
        node = queue.pop(0) 
        print(node, end=' ') 
        for neighbour in graph[node]: 
            if neighbour not in visited: 
                visited.add(neighbour) 
                queue.append(neighbour) 

if __name__ == "__main__":
    # Graph representation 
    graph = { 
        'A': ['B', 'C'], 
        'B': ['A', 'D'], 
        'C': ['A'], 
        'D': ['B'] 
    } 

    print("DFS Traversal:") 
    dfs(graph, 'A', set()) 

    print("\nBFS Traversal:") 
    bfs(graph, 'A')
