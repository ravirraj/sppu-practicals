def astar(graph, heuristic, start, goal): 
    open_list = [(start, 0)] 
    closed_list = set() 
    parent = {start: None} 
    g_cost = {start: 0} 

    while open_list: 
        open_list.sort(key=lambda x: g_cost[x[0]] + heuristic[x[0]]) 
        current = open_list.pop(0)[0] 

        if current == goal: 
            break 

        closed_list.add(current) 

        for neighbor, cost in graph[current]: 
            if neighbor in closed_list: 
                continue 

            new_cost = g_cost[current] + cost 

            if neighbor not in g_cost or new_cost < g_cost[neighbor]: 
                g_cost[neighbor] = new_cost 
                parent[neighbor] = current 
                open_list.append((neighbor, new_cost)) 

    path = [] 
    while goal is not None: 
        path.append(goal) 
        goal = parent[goal] 

    return path[::-1] 

if __name__ == "__main__":
    # Test case from the journal
    graph = {
        'A': [('B', 1), ('C', 3)],
        'B': [('D', 1)],
        'C': [('D', 1)],
        'D': []
    }
    heuristic = {
        'A': 3,
        'B': 2,
        'C': 1,
        'D': 0
    }

    print("Optimal Path:")
    print(" -> ".join(astar(graph, heuristic, 'A', 'D')))
